<?php

namespace Tests\Unit;

use App\Models\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /** @test */
    public function check_if_person_column_is_correct()
    {
        $person = new Person();

        $expected = [
            'personid',
            'personname',
            'phones'
        ];

        $arrayCompared = array_diff($expected, $person->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
