<?php

namespace App\Jobs;

use App\Services\ImportPersonService;
use App\Services\ImportShiporderService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportProcessor implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    private $data;

    private $importShiporderService;
    private $importPersonService;

    public function __construct(array $data, ImportShiporderService $importShiporderService, ImportPersonService $importPersonService)
    {
        $this->importShiporderService = $importShiporderService;
        $this->importPersonService = $importPersonService;
        $this->data = $data;
    }

    public function handle()
    {
        isset($this->data['shiporder']) ? $this->importShiporderService->importXml($this->data) : $this->importPersonService->importXml($this->data);
    }
}
