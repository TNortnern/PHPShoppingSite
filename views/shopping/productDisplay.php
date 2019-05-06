<?php
$products = displayProducts();




?>

<div class="jumbotron jumbotron-fluid productContainer">
  <div class="container">
    <h1 class="display-4"><b>Products</b></h1>
  </div>
</div>

<?php
echo "<div class='productContainer flexProds'>";
foreach ($products as $key => $product) {
    $product['price'] = number_format((float) $product['price'], 2, '.', '');
    echo "
    <div class='displayProds pageContent'>

    <form class='aform' method='POST'>
    <input hidden type='text' name='productID' class='' value=$product[productID]><br>
    <div class='imgWrapper'>
    <img class='imgprod' src='images/$product[imageName]' alt='description'>
    
    </div>
<button class='viewItem' type='button' name='showItem'>
    View $product[productName]
    </button>
    </form>
    <div style='transform:translatey(50%)'>
    <b>$product[productName]</b><br>
    <span class='sizeText'>Sizes: S-XL</span>
    ";
    
        if ($_SESSION['R'] == "Y") {
            $discount = $product['price'] * .60;
            $discount = number_format((float) $discount, 2, '.', '');
            if($product['qty'] != 0){
            echo "<p class='discountprice'>$$discount <span class='ogprice'>orig $$product[price]</span></p>";
            }else{
                echo "<p>$$discount <span class='ogprice'>orig $$product[price]</span><br> <span style='color:red'>Out of Stock</span></p>";
            }
        } else {
            if($product['qty'] == 0){
                echo "<p>$product[price] <span style='color:red'>Out of Stock</span></p>";
            }else{
            echo "<p>$$product[price]</p>";
            }
        }
     
    echo "
    </div>
    </div>";

}
echo "</div>";

foreach ($products as $key => $product) {
    $product['price'] = number_format((float) $product['price'], 2, '.', '');
    echo "

<div class='fullview'>
<a class='viewFull' href='index.php?product=$product[productName]'>View Full Item<i class='fas fa-long-arrow-alt-right'></i></a>
<a class='close'>X</a>
<b>$product[productName]</b><br>
<img src='images/$product[imageName]' alt='description'>";
    if ($_SESSION['R'] == "Y") {
        $discount = $product['price'] * .60;
        $discount = number_format((float) $discount, 2, '.', '');
        echo "<p id='clickedPrice'>$$discount</p>";
    } else {
        echo "<p id='clickedPrice'>$$product[price]</p>";
    }
    echo "
<form method='POST' >
";
    if ($product['qty'] > 0) {
        echo 
"<label for='size'>
  Size
</label>
<div class='btn-group btn-group-toggle' data-toggle='buttons'>
  <label class='btn btn-secondary active'>
    <input type='radio' name='size' id='option1' autocomplete='off' value='S' checked> S
  </label>
  <label class='btn btn-secondary'>
    <input type='radio' name='size' id='option2' autocomplete='off' value='M'> M
  </label>
  <label class='btn btn-secondary'>
    <input type='radio' name='size' id='option3' autocomplete='off' value='L'> L
  </label>
  <label class='btn btn-secondary'>
    <input type='radio' name='size' id='option3' autocomplete='off' value='XL'> XL
  </label>
</div>
<label for='amount'>Quanity</label>
<select class='quanityBox' name='amount'>
";
    }

    if ($product['qty'] < 5) {

        for ($x = 1; $x <= $product['qty']; $x++) {
            echo "<option>$x</option>";
        }
    } else {
        for ($i = 1; $i <= 5; $i++) {

            echo "<option>$i</option>";
        }
    }
    echo "
</select>";
    if ($product['qty'] < 5 && $product['qty'] != 0) {
        echo "<h6 style='color:#dc3445'>Only $product[qty] in stock. Order Fast!</h6>";
    }
    echo "<br>
<input type='text' name='productID' value='$product[productID]' hidden>";
    // show a disabled button if the product is out of stock
    if ($product['qty'] <= 0) {

        echo "<h3 style='color:red'>Out of Stock</h3><button class='btn btn-primary' type='submit' method='POST' disabled>";
    } else {
        
        
            echo "<input type='text' name='price' value='$product[price]' hidden>";
        
        echo "
        <button class='btn btn-primary' type='submit' value='addtocart' name='buyMethod'>Add to Cart</button>
        <button class='btn btn-primary' type='submit' value='oneclick' name='buyMethod'>";
    }
    echo "Order $product[productName]
</button>
</form>

</div>
";

}


?>

