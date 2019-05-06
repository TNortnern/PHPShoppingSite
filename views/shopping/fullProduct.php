<?php
$prodName = $_GET['product'];
$product = getProductByName($prodName);

?>



<div class="clickedItem">
<?php 
    if($_SESSION['R'] == 'Y'){
    $product['price'] *= .60;
    }
$product['price'] = number_format((float) $product['price'], 2, '.', '');
echo "
<hr>
<h1>$product[productName]</h1>
<hr>
<img src='images/$product[imageName]' alt='description'>
<hr>
<h4>Description</h4>
<p>$product[description]</p>
<hr>
";
    echo "<p id='clickedPrice'>$$product[price]</p>";

if($product['qty'] != 0){
echo "<form id='fullProdForm' method='POST' action='index.php?oc'>
<label for='size'>
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
";
// if quanity is greater than 0 then display select

    echo "<select class='quanityBox' name='amount'>";
    // only show the amount in stock if it's less than 5
    if ($product['qty'] < 5 ) {

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
}
    if ($product['qty'] < 5 && $product['qty'] != 0) {
        echo "<h6 style='color:#dc3445'>Only $product[qty] in stock. Order Fast!</h6>";
    }
    // hidden productID so the 'oc' page can pull the details of the product
    echo 
    "<br>
<input type='text' name='productID' value='$product[productID]' hidden>";
    if ($product['qty'] <= 0) {

        echo "<h3 style='color:red'>Out of Stock</h3><button class='btn btn-primary' type='submit' method='POST' disabled>";
    } else {
        echo "
        <input name='price' value='$product[price]' hidden>
        <button class='btn btn-success' type='submit' value='addtocart' name='buyMethod'>Add to Cart</button>
        <button class='btn btn-success' type='submit' name='buyMethod' value='oneclick' method=POST>
        ";
        
    }
    echo "Order $product[productName]
</button>
</form>
";
?>

</div>
