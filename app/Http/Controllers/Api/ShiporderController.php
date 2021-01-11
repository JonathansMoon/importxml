<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shiporder;

class ShiporderController extends Controller
{
    /**
     * @OA\Get(
     *  path="/api/shiporder",
     *  tags={"protected"},
     *  summary="Json of shiporder",
     *  @OA\Response(response=200, description="successful operation"),
     *  @OA\Response(response=401, description="Authorization Token not found"),
     *  @OA\Response(response=500, description="internal server error"),
     *  security={{ "apiAuth": {} }}
     * )
     */

    public function list()
    {
        return response()->json(Shiporder::with('shipto', 'item')->get());
    }
}
