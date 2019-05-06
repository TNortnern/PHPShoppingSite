<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="./css/styles.css">
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<title>Northern's Factory</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Northern Factory</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mens</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Women</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?cart">View Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?summary">Order History</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="nav-item">
        <a id='cartToggler' class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>Cart<span id="cartQty">
          <?php 
          if(!isset($_SESSION['shopcart']) || count($_SESSION['shopcart']) == 0){
            echo " (0)";
          }else{
          $num = count($_SESSION['shopcart']); 
          echo " ($num)";
        }
          ?>
      </span></a>
      
      </div>
    <div class="nav-item">
      <a class="nav-link logged"><i class="fas fa-user-alt"></i>Logged in as <?php echo "$_SESSION[name]";?></a>
      </div>
      <div class="nav-item">
        <a class="nav-link logout" href="index.php?logout"><i class="fas fa-sign-in-alt"></i>Logout</a>
      </div>
    </form>
  </div>
</nav>
    <div style="right:4%" id="navCart">
  <span id='cartClose'>x</span>
      <?php
      $total = 0;
          if(isset($_SESSION['shopcart']) && !empty($_SESSION['shopcart'])){
foreach ($_SESSION['shopcart'] as $index => $prod) {

    $product = getproduct($prod['product_id']);
    //define stock variable to subtract from
    $productStock = $product['qty'];
    $productid = implode(", ", $prod);
    $index++;
    if($_SESSION['R'] == 'Y'){
    $prod['product_price'] *= .60;
    }
     $prod['product_price'] = number_format((float) $prod['product_price'], 2, '.', '');
    $productTotal = $prod['product_amount'] * $prod['product_price'];
    $productTotal = number_format((float) $productTotal, 2, '.', '');
    $total += $productTotal;
    $total = number_format((float) $total, 2, '.', '');

    echo "<div class='navCartItems'>
    <img src='images/$product[imageName]'> <p><span class='cartLabels'>Name</span><br>$prod[product_name]</p> <p><span class='cartLabels'>Price</span><br>$prod[product_price]</p> <p><span class='cartLabels'>Quanity</span><br>$prod[product_amount]</p> <p><span class='cartLabels'>Total</span><br>$productTotal</p>
    </div>
<form method='POST' action='index.php?deletecartitem.php&cartItem'>
<input type='text' name='cartProductID' value='$product[productID]' hidden>
<button class='btn btn-warning' type='submit'>
Remove
</button>
</form>
    <br>";
}
          }else{
              echo "<div class='verticalCenterText' style='font-size:1.4em'>Your cart is currently empty.</div>";
          }
      ?>
     
      <a style="text-align:center" href="index.php?cart"><button style="position:absolute; bottom:0; width:100%; left:0" class='btn btn-secondary'>View full cart</button></a>
     
      </div>
<div class="centerthings-flex-column" style=" width:100%;">
<div class="springSale" id="springSale">
    <h1> Spring Sale </h1>
    <h2>40% off everything</h2>
</div>
</div>