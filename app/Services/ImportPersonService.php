<?php

namespace App\Services;

use App\Models\Person;

class ImportPersonService extends ImportAbstractService
{
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function importProcess(array $data): void
    {
        foreach ($data['person'] as $value) {

            $this->person->create([
                'personid'      => $value['personid'],
                'personname'    => $value['personname'],
                'phones'        => json_encode($value['phones'])
            ]);
        }
    }
}
