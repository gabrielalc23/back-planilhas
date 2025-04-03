<?php

use app\core\Controller;

class ApiController extends Controller
{
  
protected function jsonResponse(array $data, int $statusCode = 200): bool|string
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);

        return json_encode($data);
    }
}

