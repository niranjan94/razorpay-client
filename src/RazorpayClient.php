<?php

namespace RazorpayClient;

use Unirest\Request;

class RazorpayClient {

    private $key;
    private $secret;


    /**
     * RazorpayClient constructor.
     * @param $key
     * @param $secret
     */
    public function __construct($key, $secret) {
        $this->key = $key;
        $this->secret = $secret;
        Request::auth($this->key, $this->secret);
    }
}