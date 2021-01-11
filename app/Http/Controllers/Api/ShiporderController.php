<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shiporder;

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
