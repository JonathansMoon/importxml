<?php

namespace App\Http\Controllers;

use App\Models\Shiporder;
use Illuminate\Http\Request;

class ShiporderController extends Controller
{
    private $shiporder;

    public function __construct(Shiporder $shiporder)
    {
        $this->shiporder = $shiporder;
    }

    public function list()
    {
        return response()->json(Shiporder::with('shipto', 'item')->get());
    }
}
