<?php

namespace s2kdass;

class RESTApi{

    public $statusCode = 200;

    public function __construct() : self{

    }

    public function render(array $jsonArray = []) {
        echo json_encode([
            'statusCode' => $this->statusCode,
            'data' => $jsonArray
        ]);
        exit;
    }
}