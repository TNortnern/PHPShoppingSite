<?php
$product = getProduct($_POST['productID']);
if ($_POST) {
    if (isset($_POST['addnew'])) {
        modifyProduct($_POST['productID']);
        
    }
}
?>
<h1>Modify Existing Product</h1>
  <form method='POST' enctype="multipart/form-data" class="needs-validation admin" novalidate>
    <div class="form-group">
      <label for="prodname">Product Name</label>
      <input type="text" class="form-control" id="prodname"  placeholder="Enter Product Name" name="prodname"  required value="<?php echo "$product[productName]";?> ">
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="prodprice">Price</label>
      <input type="text" class="form-control" id="prodprice" placeholder="Enter Product Price" name="prodprice" required value="<?php echo "$product[price]";?> ">
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="prodqty">Quanity</label>
      <input type="text" class="form-control" id="prodqty"  placeholder="Enter Product Stock" name="prodqty"  required value="<?php echo "$product[qty]";?> ">
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="proddesc">Description</label>
      <input type="text" class="form-control" id="proddesc" placeholder="Enter Product Description" name="proddesc" required value="<?php echo "$product[description]";?> ">
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
    <div class="centerthings" id="showCurrent">
      <p>Current Image</p>
      <p class="toggleChange" id="changeImg">Change</p>
        <?php
      echo "<img id='modifyimg' src='images/$product[imageName]' alt='description'>";
      ?>
    </div>
    <input hidden text='text' name="productimg" 
    <?php echo "value='$product[imageName]'";?>>
    <div class="form-group" id="setNew">
      <label for="prodimg">Product Image</label><br>
      <input disabled type="file" id="prodimg" name="prodimg" required>
      <div class="invalid-feedback">Please upload an image.</div>
      <p class="toggleChange" id="cancelChange">Cancel</p>
    </div>
    <input type="text" value="<?php echo "$_POST[productID]";?> " name="productID" hidden>
    <div class="centerthings">
    <button type="submit" name='addnew' class="btn btn-success">Modify</button>
    </div>
  </form>
 