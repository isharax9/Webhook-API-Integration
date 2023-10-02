<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cc payment</title>
        <meta name="ccpayment-site-verification" content="6f3ee5b43d930a54d31a59930b071adc"/> 
</head>
<body>
    




<h1>CC Payment here</h1>

<?php

use CCPayment\v1\CCPay;

$resp =  CCPay::CheckUser("9454818","202301310325561620262074393440256","c4600b8125b7ed23b5b7b8ee4acb42f4");
var_dump($resp);

?>




</body>
</html>