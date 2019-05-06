<?php
$total = 0;
// checks to see if cart exists or is empty, if so display your cart is empty msg
if(isset($_SESSION['shopcart']) && !empty($_SESSION['shopcart'])){
foreach ($_SESSION['shopcart'] as $index => $prod) {
    $product = getproduct($prod['product_id']);
    //define stock variable to subtract from
    $productStock = $product['qty'];
    $productid = implode(", ", $prod);
    $index++;
    if($_SESSION['R'] == 'Y'){
    echo "<div class='alert alert-success'>40% off coupon applied</div>";
    $prod['product_price'] *= .60;
    }
     $prod['product_price'] = number_format((float) $prod['product_price'], 2, '.', '');
    $productTotal = $prod['product_amount'] * $prod['product_price'];
    $productTotal = number_format((float) $productTotal, 2, '.', '');
    $total += $productTotal;
    $total = number_format((float) $total, 2, '.', '');
    if(isset($_POST['orderitems'])){
    orderProducts($prod['product_id'], $prod['product_amount'], $productStock, $prod['product_size'], $productTotal);
    }
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

<form method="POST">
 <div class="form-group">
      <label for="Name">Name</label>
      <input style="text-align:center" type="text" class="form-control" id="username" placeholder="Enter Name" name="username" 
      
      <?php
if (isset($_SESSION['name'])) {
    echo "value='$_SESSION[name]' ";
}
?>
      required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input style="text-align:center" type="email" class="form-control" id="email" placeholder="Enter E-mail" name="useremail" 
      
      <?php
if (isset($_SESSION['email'])) {
    echo "value='$_SESSION[email]' ";
}
?>
      required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Enter a valid e-mail</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree the terms conditions
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Read the terms & conditions and click the box to continue.</div>
      </label>
    </div>
    <p class="centerthings">Total is <?php echo "$$total";?></p>
    <?php if(isset($_SESSION['ID'])){
        echo "<input type='text' name='userID' value='$_SESSION[ID]' hidden>";
    }
    ?>
<button type="submit" name="orderitems" class="btn btn-warning">Checkout</button>
</form>
</div>
<?php
}else{
    echo "<div class='alert'>You have no items in your cart currently.</div>";
}


