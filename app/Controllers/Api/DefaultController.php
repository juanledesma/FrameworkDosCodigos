<?php


namespace App\Controllers\Api;

use Psr\Http\Message\ServerRequestInterface;

class DefaultController extends Controller
{

    public function index(ServerRequestInterface $request)
    {

        return $this->jsonResponse([
            'title'   => 'My New Simple API',
            'version' => 1,
        ]);
    }
}
