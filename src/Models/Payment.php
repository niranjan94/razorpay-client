<?php


namespace RazorpayClient\Models;


class Payment extends Model {

    /**
     * RazorpayClient\Models\Payment
     *
     * @property string $id
     * @property string $entity
     * @property double $amount
     * @property string $currency
     * @property string $status
     * @property double $amount_refunded
     * @property string $refund_status
     * @property string $email
     * @property string $contact
     * @property mixed $error_code
     * @property string $error_description
     * @property mixed $notes
     * @property double $created_at
     */
    public function capture($amount) {

    }

    public function refund($amount = null) {

    }
}