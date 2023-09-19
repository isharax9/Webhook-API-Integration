<!DOCTYPE html>
<html>
<head>
    <title>Product Listing</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header><h1>Product Listing</h1></header>
    
    <div class="product">
        <img src="./src/Apple iPhone 11_1_6505cfd925eba.png" alt="Product 1">
        <h2>Product 1</h2>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Price: LKR400,000</p>
        <form method="post" action="buy.php">
            <input type="hidden" name="product_id" value="1">
            <input type="submit" value="Buy Now">
        </form>
    </div>

    <div class="product">
        <img src="./src/Samsung Galaxy S23 _2_6505d54116b1f.jpeg" alt="Product 2">
        <h2>Product 2</h2>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Price: LKR 450,000</p>
        <form method="post" action="buy.php">
            <input type="hidden" name="product_id" value="2">
            <input type="submit" value="Buy Now">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
