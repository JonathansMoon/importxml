<?php

namespace App\Services;

use App\Models\Shiporder;

class ImportShiporderService extends ImportAbstractService
{
    private $shiporder;

    public function __construct(Shiporder $shiporder)
    {
        $this->shiporder = $shiporder;
    }

    public function importProcess(array $data): void
    {
        foreach ($data['shiporder'] as $value) {

            $shiporder = $this->shiporder->create($value);
            $shiporder->shipto()->create($value['shipto']);

            $items = $value['items']['item'];
            $NumberOfItems = array_sum(array_map('is_array', $items));

            // NOTE Check if the array is multidimensional and then save
            if($NumberOfItems === 0) {
                $shiporder->item()->create($items);
            } else{
                $shiporder->item()->createMany($items);
            }
        }
    }
}
