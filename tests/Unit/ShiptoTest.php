<?php

namespace Tests\Unit;

use App\Models\Shipto;
use PHPUnit\Framework\TestCase;

class ShiptoTest extends TestCase
{
    /** @test */
    public function check_if_shipto_column_is_correct()
    {
        $shipto = new Shipto();

        $expected = [
            'name',
            'address',
            'city',
            'country'
        ];

        $arrayCompared = array_diff($expected, $shipto->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
