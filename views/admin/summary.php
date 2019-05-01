<?php 
$orders = getOrders();
?>

<div class="jumbotron jumbotron-fluid productContainer">
  <div class="container">
    <h1 class="display-4"><b>Summary of Orders</b></h1>
  </div>
</div>

<?php
foreach($orders as $index => $order){
    $product = getProduct($order['productID']);
    $index++;
    $order['price'] = number_format((float) $order['price'], 2, '.', '');
    $price = $order['price'];
    $customername = $order['customerName'];
    $customeremail = $order['customeremail'];
    $amount = $order['qtyOrdered'];
    $size = $order['size'];
    $item = $product['productName'];
    $image = $product['imageName'];
    $total = $order['price'] * $order['qtyOrdered'];
    


   echo" <div id='confirmer' class='centerthings-flex centerthings adminSummary'>

<div class='card'>
  <div class='card-header'>
    E-mail
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title emailOnSummary'>$customeremail</p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Name
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$customername</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Order #
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$index</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Item
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$item</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Size
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$size</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Price of Item
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$$product[price]</p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Quanity
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$amount</p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Total
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$$total</p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Image
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'><img src='images/$image' alt='description'></p>
  </div>
</div>

</div>";
}