<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Person;

class PersonController extends Controller
{
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @OA\Get(
     *  path="/api/person",
     *  tags={"protected"},
     *  summary="Json of persons",
     *  @OA\Response(response=200, description="successful operation"),
     *  @OA\Response(response=401, description="Authorization Token not found"),
     *  @OA\Response(response=500, description="internal server error"),
     *  security={{ "apiAuth": {} }}
     * )
     */
    public function list()
    {
        foreach ($this->person->all() as $value) {
            $data[] =
                [
                    'personid'      =>  $value->personid,
                    'personname'    =>  $value->personname,
                    'phones'        =>  json_decode($value->phones, true)
                ];
        }
        if (!isset($data)) {
            return response()->json([]);
        }
        return response()->json(['person' => $data]);
    }
}
