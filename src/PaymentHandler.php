<?php

namespace RazorpayClient;

use RazorpayClient\Models\Payment;
use Unirest\Request;

class PaymentHandler extends Handler{

    /**
     * @param string|array $param Options or ID
     * @return \stdClass
     */
    public function fetch($param) {
        if(is_string($param)) {
            return new Payment($this->response(Request::get(Endpoints::fetch($param))->raw_body));
        } else {
            $response = json_decode(Request::get(Endpoints::fetch($param))->raw_body, true);
            $json['entity'] = "collection";
            foreach ($response as $key => $item) {
                $json['items'][$key] = new Payment($this->response($item));
            }
            return $this->response($json);
        }
    }
}