<?php

namespace Core\Traits;

use Core\Constants\HttpStatusCode;

trait WithErrorResponse
{
    private function errResponse(int $code)
    {
        http_response_code($code);
        echo json_encode(['code' => $code]);
    }

    public function notFound()
    {
        $this->errResponse(HttpStatusCode::NOT_FOUND);
    }
}
