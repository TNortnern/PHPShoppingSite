<?php
$product = getProduct($_POST['productID']);
if($_POST){
    if(isset($_POST['delete'])){
        deleteProduct($_POST['productID']);
        header("Location:admin.php?mod=d&n=$product[productName]");
    }
}
?>



<div class="clickedItem bg-item">
<?php echo "
<b>$product[productName]</b><br>
<img src='images/$product[imageName]' alt='description'>
<p id='clickedPrice'>$$product[price]</p>

";
?>

</div>

<div class='delete'>
<span>
<h4>Delete <?php echo "$product[productName]?";?></h4>
</span>
<div style='display:flex;justify-content:center'>
<?php
echo "
<form method='post'>
<input type='text' name=productID value='$product[productID]' hidden>
<input type='text' name=productName value='$product[productName]' hidden>
<button type='submit' name='delete' class='confirm'>
    Yes
</button>
</form>
<form>
<button type='submit' class='cancel' action='admin.php'>
    No
</button>
</form>
";

?>
</div>
</div>