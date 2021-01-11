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

    /**
     * @OA\Get(
     *  path="/api/shiporder/{id}",
     *  tags={"protected"},
     *   @OA\Parameter(
     *      name="id",
     *      in="path",
     *      description="id",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *  summary="find of shiporder",
     *  @OA\Response(response=200, description="successful operation"),
     *  @OA\Response(response=401, description="Authorization Token not found"),
     *  @OA\Response(response=404, description="Shiporder not found"),
     *  @OA\Response(response=500, description="internal server error"),
     *  security={{ "apiAuth": {} }}
     * )
     */
    public function find($id)
    {
        try {
            return response()->json(Shiporder::with('shipto', 'item')->find($id));
        } catch (\Throwable $th) {
            return response()->json('Not found id', 404);
        }

    }
}
