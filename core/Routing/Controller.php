<?php

namespace Core\Routing;

use Core\Constants\HttpStatusCode;
use Core\Traits\WithErrorResponse;

abstract class Controller
{
    use WithErrorResponse;

    public function response(mixed $data, int $status = HttpStatusCode::OK)
    {
        if ($status !== HttpStatusCode::OK) {
            $this->errResponse($status);
            return;
        }

        http_response_code($status);
        echo json_encode(['data' => $data]);
    }

    public function execute(string $method)
    {
        $this->{$method}();
    }

    public function __call(string $name, $args)
    {
        echo "Calling to undefined method '\\" . get_class($this) . "@$name' ";
    }
}
