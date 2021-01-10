<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }
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
