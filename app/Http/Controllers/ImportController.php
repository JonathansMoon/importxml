<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportRequest;
use App\Models\Item;
use App\Models\Shiporder;
use App\Models\Shipto;
use App\Services\ImportPerson;
use App\Services\ImportPersonService;
use App\Services\ImportService;
use App\Services\ImportShiporder;
use App\Services\ImportShiporderService;
use Illuminate\Http\Request;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;

use function App\Helpers\formatDateAndTime;
use function App\Helpers\xmlForJson;

class ImportController extends Controller
{
    private $importShiporderService;
    private $importPersonService;

    public function __construct(ImportShiporderService $importShiporderService, ImportPersonService $importPersonService) {
        $this->importShiporderService = $importShiporderService;
        $this->importPersonService = $importPersonService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImportRequest $request)
    {
        try{
            foreach ($request->file('file') as $value) {
                $data[] = xmlForJson($value);
            }

            foreach ($data as $value) {

                if (!isset($value['shiporder']) && !isset($value['person'])) {
                    return back()->withErrors(['message' => 'The contents of the file were not unexpected.'])->withInput();
                }

                isset($value['shiporder']) ? $this->importShiporderService->importXml($value) : $this->importPersonService->importXml($value);
            }

            toastr()->success('Data has been saved successfully!');
            return back();

        } catch(\Exception $e) {

            return back()->withErrors(['message' => $e->getMessage()])->withInput();

        }
    }
}
