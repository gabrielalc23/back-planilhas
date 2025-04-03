<?php

namespace app\classes;

class Uri {
    public static function uri(): array|bool|int|string|null{
        return parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}