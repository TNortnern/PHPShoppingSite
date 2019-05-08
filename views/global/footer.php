<div id="navCart">
  <span id='cartClose'>x</span>
      <?php
      $total = 0;
          if(isset($_SESSION['shopcart']) && !empty($_SESSION['shopcart'])){
            if($_SESSION['R'] == 'Y'){
            echo "<div class='alert alert-success'>40% off coupon applied</div>";
            }
foreach ($_SESSION['shopcart'] as $index => $prod) {

    $product = getproduct($prod['product_id']);
    //define stock variable to subtract from
    $productStock = $product['qty'];
    $productid = implode(", ", $prod);
    $index++;
    if($index <= 3){
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
}
          }else{
              echo "<div class='verticalCenterText' style='font-size:1.4em'>Your cart is currently empty.</div>";
          }
      ?>
     
      <a style="text-align:center" href="index.php?cart"><button style="position:absolute; bottom:0; width:100%; left:0" class='btn btn-secondary'>View full cart</button></a>
     
      </div>
<hr>
<div class="centerthings-flex">
<footer class="pageContent">&copyNorthern 2019</footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="./js/app.js"></script>
<script src ="./js/jquery.js"></script>
</body>
</html>

