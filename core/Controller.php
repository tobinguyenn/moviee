<?php

namespace Core;

abstract class Controller
{
    public function response(mixed $data)
    {
        echo json_encode($data);
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
