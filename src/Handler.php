<?php


namespace RazorpayClient;


class Handler {

    function response($rawResponse) {
        $json = json_decode($rawResponse, true);
        if($json['entity'] == "collection") {
            return $this->arrayToObject($json['items']);
        } else {
            return $this->arrayToObject($json);
        }
    }

    function arrayToObject($array) {
        if (is_array($array)) {
            return (object) array_map(__FUNCTION__, $array);
        }
        else {
            return $array;
        }
    }

}