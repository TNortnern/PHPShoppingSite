<?php

if(isset($_POST['order'])){
    $productID = $_POST['productID'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $name = $_POST['username'];
    $size = $_POST['size'];
    $product = getProduct($productID);

    ?>
<h2 style="text-align:center">Thank you for ordering!</h2>
<h1>Order Summary</h1>
<div class="centerthings">
<p>Item Name:<?php echo "$product[productName]"; ?> </p>
<p>Price: <?php echo "$price"; ?></p>
<p>Quanity: <?php echo "$amount";?></p>
<p>Size: <?php echo "$size"; ?></p>
</div>

<?php
}
?>