
<div class="centerthings">
<?php
$orders = getOrderHistory($_SESSION['ID']);
if(empty($orders)){
    echo "You haven't ordered anything yet. &#9785;";
}else{
echo 
"<h1>Order Summary</h1>
<hr>
";
echo "<h3> Order History for $_SESSION[name]<hr>";
foreach ($orders as $index => $order) {
    $order['price'] = number_format((float) $order['price'], 2, '.', '');
    $total = $order['qtyOrdered'] * $order['price'];
    $total = number_format((float) $total, 2, '.', '');
    $product = getProduct($order['productID']);
    $index++;
    // echo "$index. <b>$product[productName]</b><br> Size $order[size]<br> Price $$order[price]<br> Quanity $order[qtyOrdered]<br> Total $$total<hr>";

    echo 
    "
    
    <div id='confirmer' class='centerthings-flex'>
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
    <p class='card-title'>$product[productName]</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Size
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$order[size]</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Price
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$$order[price]</p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Quanity
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$order[qtyOrdered]</p>
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
    <p class='card-title'><img src='images/$product[imageName]' alt='description'></p>
  </div>
</div>

</div>
    
    ";
}
?>
 </div>
<?php
}
?>