<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Checkout</title>
    <link rel="stylesheet" href="./css/Payout.css">
</head>
<body>
    <header>
        <h1>E-Commerce Checkout</h1>
    </header>
    <div class="container">
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout" class="checkout-form">
            <input type="hidden" name="1224207" value="121XXXX">                <!--value must be changed i think-->
            <input type="hidden" name="return_url" value="http://sample.com/return">
            <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
            <input type="hidden" name="notify_url" value="http://sample.com/notify">  
            
                
            <h2>Item Details</h2>
            <div class="form-group">
                <label for="order_id">Order ID</label>
                <input type="text" name="order_id" id="order_id" value="Item 01">
            </div>
            <div class="form-group">
                <label for="items">Item Name</label>
                <input type="text" name="items" id="items" value="Apple 15pro">
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" name="currency" id="currency" value="LKR">
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount" value="1000">
            </div>

            <h2>Customer Details</h2>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" value="Saman">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="Perera">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="samanp@gmail.com">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="0771234567">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="No.1, Galle Road">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" value="Colombo">
            </div>
            <input type="hidden" name="country" value="Sri Lanka">
            <input type="hidden" name="hash" value="">
            <input type="submit" value="Buy Now">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
