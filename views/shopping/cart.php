<?php
$total = 0;
// checks to see if cart exists or is empty, if so display your cart is empty msg
if(isset($_SESSION['shopcart']) && !empty($_SESSION['shopcart'])){
foreach ($_SESSION['shopcart'] as $index => $prod) {
    $product = getproduct($prod['product_id']);
    $index++;
    $productTotal = $prod['product_amount'] * $prod['product_price'];
    $productTotal = number_format((float) $productTotal, 2, '.', '');
    $total += $productTotal;
    $total = number_format((float) $total, 2, '.', '');

echo 
"

<div id='confirmer' class='centerthings-flex centerthings cart'>
    <div class='card'>
  <div class='card-header'>
    Image
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'><img src='images/$prod[product_image]' alt='description'></p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Item
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$prod[product_name]</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Size
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$prod[product_size]</p>
  </div>
</div>

<div class='card'>
  <div class='card-header'>
    Price
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$$prod[product_price]</p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Quanity
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$prod[product_amount]</p>
  </div>
</div>


<div class='card'>
  <div class='card-header'>
    Total
  </div>
  <div class='card-body'>
    <br>
    <p class='card-title'>$productTotal</p>
  </div>
</div>

<form method='POST' action='index.php?deletecartitem.php'>
<input type='text' name='cartProductID' value='$product[productID]' hidden>
<button class='unbutton' type='submit'>
<span class='trashicon'><i class='fas fa-trash'></i></span>
</button>
</form>


</div>


";


    
}
?>
<div style="border:1px solid gray; padding: 20px 0 1px 0px" class="centerthings">
<p class="centerthings">Total is <?php echo "$$total";?></p>
<button class="btn btn-warning">Checkout</button>
</div>
<?php
}else{
    echo "<div class='alert'>You have no items in your cart currently.</div>";
}


