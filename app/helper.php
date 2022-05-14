<?php


function myLogger($message ,$channel = 'single',$type = 'info'){

    if (is_object($message)){
        $message = json_decode($message);
    }
    \Illuminate\Support\Facades\Log::channel($channel)->$type($message);
}
