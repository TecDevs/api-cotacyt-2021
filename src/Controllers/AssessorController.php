<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AssessorController
{
    public function create(Request $request, Response $response, array $args): Response
    {
        return $response;
    }
}
