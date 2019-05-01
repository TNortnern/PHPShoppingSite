<?php
if(isset($_POST['prompt'])){
  echo "<div class='alert alert-danger' id='taken'>$_POST[prodname] already exists.</div>";
}
?>

<h1>Add New Product</h1>
  <form method='POST' enctype="multipart/form-data" class="needs-validation admin" novalidate>
    <div class="form-group">
      <label for="prodname">Product Name</label>
      <input type="text" class="form-control" id="prodname" placeholder="Enter Product Name" name="prodname" pattern="^(?!^ +$)([\w -&]+)$" 
      <?php if(isset($_POST['prodname'])){
        echo "value='$_POST[prodname]'";
      }
      ?>
      required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="prodprice">Price</label>
      <input type="text" class="form-control" id="prodprice" placeholder="Enter Product Price" name="prodprice" pattern="\S+" 
      <?php if(isset($_POST['prodprice'])){
        echo "value='$_POST[prodprice]'";
      }
      ?>
      required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="prodqty">Quanity</label>
      <input type="text" class="form-control" id="prodqty" placeholder="Enter Product Stock" name="prodqty" pattern="\S+" 
      <?php if(isset($_POST['prodqty'])){
        echo "value='$_POST[prodqty]'";
      }
      ?>
      required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="proddesc">Description</label>
      <input type="text" class="form-control" id="proddesc" pattern="^(?!^ +$)([\w -&]+)$" placeholder="Enter Product Description" name="proddesc" 
      <?php if(isset($_POST['proddesc'])){
        echo "value='$_POST[proddesc]'";
      }
      ?>
      required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="prodimg">Product Image</label>
      <input type="file" class="form-control-file" id="prodimg" name="prodimg" required>
      <div class="invalid-feedback">Please upload an image.</div>
    </div>
    <!-- Prompt for error message if redirect doesn't occur -->
    <input type="hidden" name="prompt">
    <div class="centerthings">
    <button type="submit" name='addnew' class="btn btn-success">Add</button>
    </div>
  </form>
 <?php
if($_POST){
    addProduct();
}