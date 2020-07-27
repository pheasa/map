<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/MarkarianMall/checkout/" method="post">
    first name : <input type="text" name="billing_first_name"><br>
    last name :  <input type="text" name="billing_last_name"><br>
    company : <input type="text" name="billing_company"><br>
    country : <input type="text" name="billing_country"><br>
    address1 : <input type="text" name="billing_address_1"><br>
    address2 : <input type="text" name="billing_address_2"><br>
    city : <input type="text" name="billing_city"><br>
    state : <input type="text" name="billing_state"><br>
    postcode  : <input type="text" name="billing_postcode"><br>
    phone  : <input type="text" name="billing_phone"><br>
    email : <input type="text" name="billing_email"><br>
    comment : <input type="text" name="order_comments"><br>
    payment : <input type="text" name="payment_method" value="bacs"><br>
    please order : <input type="text" name="woocommerce_checkout_place_order" value="Place order"><br>
    crocess : <input type="text" name="woocommerce-process-checkout-nonce" value="f689cc1109"><br>
    referer : <input type="text" name="_wp_http_referer" value="/MarkarianMall/?wc-ajax=update_order_review"><br>
    <input type="submit">
    </form>
</body>
</html>