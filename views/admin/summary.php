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
    $total = $order['price'] * $order['qtyOrdered'];
    echo "<div style='font-size:120%;' class='centerthings'>$index.<br> <b>Name</b> $order[customerName]<br><b>E-mail</b> $order[customeremail]<br><b>Item</b> $product[productName] $$order[price]<br><b>Quanity</b> $order[qtyOrdered]<br><b>Size</b> $order[size]<br><b>Total</b> $$total<br><hr></div> ";
}