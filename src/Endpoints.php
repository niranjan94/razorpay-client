<?php

namespace RazorpayClient;


class Endpoints {

    /* @var string */
    static $baseUrl = 'https://api.razorpay.com/v1';

    /**
     * @return string Endpoint URL
     */
    public static function fetchAll() {
        return self::$baseUrl."/payments";
    }

    /**
     * @param string|int $paymentId The id of the payment to be retrieved
     * @return string
     */
    public static function fetch($paymentId) {
        return self::$baseUrl."/payments/$paymentId";
    }

    /**
     * @param string|int $paymentId The ID of the payment to capture
     * @return string
     */
    public static function capture($paymentId) {
        return self::$baseUrl."/payments/$paymentId/capture";
    }

    /**
     * @param string|int $paymentId The ID of the payment to refund
     * @return string
     */
    public static function refund($paymentId) {
        return self::$baseUrl."/payments/$paymentId/refund";
    }

    /**
     * @param string|int $paymentId The payment id whose refunds are to be fetched
     * @return string
     */
    public static function fetchRefunds($paymentId) {
        return self::$baseUrl."/payments/$paymentId/refunds";
    }

    /**
     * @param string|int $paymentId The id of the payment whose refund is to be retrieved
     * @param string|int $refundId The id of the refund to be retrieved
     * @return string
     */
    public static function fetchRefund($paymentId, $refundId) {
        return self::$baseUrl."/payments/$paymentId/refunds/$refundId";
    }

}