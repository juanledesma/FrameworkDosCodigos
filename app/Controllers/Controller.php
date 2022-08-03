<?php declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Laminas\Diactoros\Response;
use Windwalker\Edge\Edge;
use Windwalker\Edge\Loader\EdgeFileLoader;

class Controller
{
    
    public function render(string $name, array $data = []): ResponseInterface
    {

        $paths = array(
            realpath('../') . '/app/Views'
        );

        $edge= new Edge(new EdgeFileLoader($paths));

        $response = new Response;
        $response->getBody()->write($edge->render($name,$data));
        return $response;

    }
}