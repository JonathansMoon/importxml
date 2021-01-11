<?php

namespace Tests\Unit;

use App\Models\Shiporder;
use PHPUnit\Framework\TestCase;

class ShiporderTest extends TestCase
{
    /** @test */
    public function check_if_shiporder_column_is_correct()
    {
        $shiporder = new Shiporder();

        $expected = [
            'orderid',
            'orderperson'
        ];

        $arrayCompared = array_diff($expected, $shiporder->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
