<?php


namespace App\Traits;

use Illuminate\Support\MessageBag;

trait ResponseTrait{

    function sendError(array|MessageBag $data, string $message = 'error in process your request'):object {
        return response()->json(['status'=>'fali','message'=>$message,'data'=>$data]);
    }

    function sendSuccess(array $data, string $message = 'suucess in process your request'):object {
        return response()->json(['status'=>'success','message'=>$message,'data'=>$data]);
    }
}