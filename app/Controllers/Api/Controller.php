<?php

namespace App\Controllers\Api;

class Controller
{
    public function jsonResponse(array $data, int $status = 200)
    {

        return [
            'data' => $data,
            'status'   => 'OK',
        ];
    }
}
