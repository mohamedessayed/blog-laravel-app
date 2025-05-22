<?php

namespace App\Services;

use Carbon\Carbon;

class StorageHandler{

    public static function uploadFile($file,$category): string{
            $exten = $file->getClientOriginalExtension();
            // $filename = 
            $dateTimeNow = strtotime(Carbon::now());
            $filename = "$category-".$dateTimeNow.'.'.$exten;
            $filepath = $file->storeAs('uploads', $filename,'public');
            return $filepath;
    }
}
