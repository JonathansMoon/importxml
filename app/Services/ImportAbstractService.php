<?php

namespace App\Services;

use Exception;

abstract class ImportAbstractService
{

    public function importXml(array $data): string {
        try {
            $this->importProcess($data);
            return 'The import of the file was successful!';
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function importProcess(array $data): void
    {

    }
}
