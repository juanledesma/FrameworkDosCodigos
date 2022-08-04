<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\Response;

class DefaultController extends Controller
{
   /**
    * Controller.
    *
    * @param \Psr\Http\Message\ServerRequestInterface $request
    *
    * @return \Psr\Http\Message\ResponseInterface
    */
   public function index(ServerRequestInterface $request): ResponseInterface
   {
      // var_dump($_ENV['DB_PASS']);
      
      return $this->render('welcome');
   }

   /**
    * Controller.
    *
    * @param \Psr\Http\Message\ServerRequestInterface $request
    *
    * @return \Psr\Http\Message\ResponseInterface
    */
   public function admin(ServerRequestInterface $request): ResponseInterface
   {
      return $this->render('admin');
   }
}
