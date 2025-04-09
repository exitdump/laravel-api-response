<?php

namespace Jahid\ApiResponse;

class ResponseBuilder
{
    public static function success($data = [], $message = 'Success', $code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public static function error($message = 'Error', $code = 500, $errors = [])
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors' => $errors
        ], $code);
    }

    public static function validation($errors, $message = 'Validation failed', $code = 422)
    {
        return self::error($message, $code, $errors);
    }
}
