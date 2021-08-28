<?php
namespace App\Traits;
use Illuminate\Http\Response;

traiT ResponseTrait{
    public static function AllResponse($statusText='Error', $status=Response::HTTP_BAD_REQUEST, $message="", $url='')
    {
        return response()->json([
            'status'=>$status,
            'statusText'=>ucfirst($statusText),
            'message'=>$message,
            'url'=>$url,
        ]);

    }
}
