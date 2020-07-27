<?php
// $name=$_POST['name'];
// $mail=$_POST['mail'];
// echo $name.'<br>'.$mail;
print_r($_POST);
exit;
class test{
    public $billing_first_name;
    public $billing_last_name;
    public $billing_company;
    public $billing_country;
    public $billing_address_1;
    public $billing_address_2;
    public $billing_city;
    public $billing_state;
    public $billing_postcode;
    public $billing_phone;
    public $billing_email;
    public $order_comments;
    public $payment_method;
    public $woocommerce_checkout_place_order;
    // public $woocommerce_process-checkout-nonce;
    public $_wp_http_referer;
}