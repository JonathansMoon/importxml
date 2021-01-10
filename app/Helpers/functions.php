<?php

namespace App\Helpers;

use Exception;
use Illuminate\Http\UploadedFile;

function xmlForJson( $fileXml): array
    {
        libxml_use_internal_errors(true);
        $fileXml = simplexml_load_file($fileXml);

        if ($fileXml === false) {
            $message = '';
            foreach (libxml_get_errors() as $key => $error) {
                if($key != 0) {
                    $message .= $error->message;
                }
            }
            throw new Exception(trim($message));
        }

        $fileString = json_encode($fileXml);
        $fileJson = json_decode($fileString, true);
        return $fileJson;
    }

