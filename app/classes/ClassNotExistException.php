<?php

namespace app\classes\exceptions;

use Exception;

class ClassNotExistException extends Exception {

    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null) {

        header('Content-Type: application/json');
        http_response_code($code ?: 404);

        echo json_encode([
            'error' => true,
            'message' => $message ?: "Essa classe não existe",
            'code' => $code
        ]);

        exit;
    }
}