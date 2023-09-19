<?php
$merchant_id = "1224207";
$order_id = "12345";
$amount = 100000; 
$currency = "LKR"; 
$merchant_secret = "NDI5MTcyMjU0OTEwNDUxNDg1MjgyMjM1Mjk2MzQ4Mzk1MDc3OTM4NA==";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

echo $hash;
?>

<!-- I have no ideas about how to creat a hash form this code  -->