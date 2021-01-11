<?php

namespace Tests\Unit;

use App\Models\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    /** @test */
    public function check_if_item_column_is_correct()
    {
        $item = new Item();

        $expected = [
            'title',
            'note',
            'quantity',
            'price'
        ];

        $arrayCompared = array_diff($expected, $item->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
