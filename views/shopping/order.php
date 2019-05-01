<?php

if(isset($_POST['order'])){
    $productID = $_POST['productID'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $name = $_POST['username'];
    $size = $_POST['size'];
    $product = getProduct($productID);
    $total = $price * $amount;
    ?>
<h2 class="centerthings alert alert-success">Thank you for ordering!</h2>
<h1 class="alert alert-secondary">Order Summary</h1>
<div id="confirmer" class='centerthings-flex centerthings'>

<div class='card'>
  <div class='card-header'>
    Item
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'><?php echo"$product[productName]";?></p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Size
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'><?php echo"$size";?></p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Price of Item
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$<?php echo"$price";?></p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Quanity
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'><?php echo "$amount";?></p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Total
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$<?php echo"$total";?></p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Image
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'><img src='images/<?php echo "$product[imageName]";?>' alt='description'></p>
  </div>
</div>

</div>


<?php
}
?>