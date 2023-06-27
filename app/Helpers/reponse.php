<?php
//Helpers functions for all response
function response_success($result=[],$message=null): \Illuminate\Http\JsonResponse
{

    return response()->json([
        'result' => $result,
        'message'=>$message
    ]);
}

function response_error($message): \Illuminate\Http\JsonResponse
{
    return response()->json([
        'error' => $message
    ],409);
}
