<?php
    $productID = $_POST['productID'];
    $amount = $_POST['amount'];
    $size = $_POST['size'];
    $product = getProduct($productID);
    $image = $product['imageName'];
    if($_SESSION['R'] == "Y"){
        $product['price'] = $product['price'] * .60;
        $product['price'] = number_format((float) $product['price'], 2, '.', '');
    }
    $total = $product['price'] * $amount;
?>

<h1>Confirm Order</h1>
<div id="confirmer" class='centerthings'>
<?php

echo "
<div class='centerthings-flex'>

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

</div>
";


?>



<form action="index.php?order" method="POST" class="needs-validation" novalidate>
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
    <input type='text' name='price' <?php echo "value='$product[price]'";?> hidden>
<input type='text' name='amount' <?php echo "value='$amount'";?> hidden>
<input type='text' name='productID' <?php echo "value='$productID'";?> hidden>
<input type='text' name='prodqty' <?php echo "value='$product[qty]'"; ?> hidden>
<input type='text' name='size' <?php echo "value='$size'"; ?> hidden>
<?php
if(isset($_SESSION['ID'])){
    echo "<input hidden type='text' name='userID' value='$_SESSION[ID]'>";
}
?>
<button class="btn btn-success" type='submit' name='order'>Confirm</button>
<a href=index.php><button type="button" class="btn btn-dark">Cancel</button></a>
  </form>




  


