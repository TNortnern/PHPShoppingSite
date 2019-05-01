<?php
$products = displayProducts();

?>

<div class="jumbotron jumbotron-fluid productContainer">
  <div class="container">
    <h1 class="display-4"><b>Product Manager</b></h1>
  </div>
</div>

<?php
echo "<div class='centerthings'>
<form method='POST' action='admin.php?option=add'>
<button type= 'submit' class='btn btn-success'>Add New Product</button>
</form>
</div>";
echo "<div class='productContainer flexProds'>";
foreach ($products as $key => $product) {
    $product['price'] = number_format((float) $product['price'], 2, '.', '');
    echo "
    <div class='displayProds pageContent'>

    <form class='aform' method='POST'>
    <input hidden type='text' name='productID' class='' value=$product[productID]><br>
   
    <div class='imgWrapper'>
    <img src='images/$product[imageName]' alt='description'>
    
    </div>
    <button class='viewItem' type='button' name='showItem'>
    View $product[productName]
    </button>
    </form>
    <div style='transform:translatey(145%)'>
    <b>$product[productName]</b>
    <p>$$product[price] Stock: $product[qty]</p>
    </div>

    </div>



        ";
}
echo "</div>";
foreach ($products as $key => $product) {
    $product['price'] = number_format((float) $product['price'], 2, '.', '');

    echo "

<div class='fullview'>
<a class='close'>X</a>
<b>$product[productName]</b><br>
<img src='images/$product[imageName]' alt='description'>
<p id='clickedPrice'>$$product[price]</p>
<div class='optionButtons'>
<form method='POST' action='admin.php?option=modify'>
<input type='text' name='productID' value='$product[productID]' hidden>
<button class='btn btn-primary' type='submit'>
Modify $product[productName]
</button>
</form>
<form method='POST' action='admin.php?option=delete'>
<input type='text' name='productID' value='$product[productID]' hidden>
<button class='btn btn-primary promp-delete' type='submit'>
Delete $product[productName]
</button>
</form>
</div>

</div>

";
}

?>

