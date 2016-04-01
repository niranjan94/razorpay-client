<?php


namespace RazorpayClient\Models;


class Model {
    
    private $response;

    /**
     * Refund constructor.
     * @param $response
     */
    public function __construct($response) {
        $this->response = $response;
    }

    function __get($name) {
        if($this->response == null) {
            throw new \Exception();
        }

        if(!property_exists($this->response, $name)) {
            throw new \Exception();
        }

        return $this->response->{$name};
    }


}