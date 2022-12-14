<?php

namespace App\Http\Controllers\API;

class ResponseFormater
{
    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null
        ],
        'data' => null
    ];

    //memparsing data dari db dan akan memberi message secara langsung
    public static function success($data = null, $message = null)
    {
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;


        return response()->json(self::$response, self::$response['meta']['code']);
    }
    //memparsing data dari db dan akan memberi message secara langsung
    public static function error($data = null, $message = null, $code = 400)
    {
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;


        return response()->json(self::$response, self::$response['meta']['code']);
    }
}