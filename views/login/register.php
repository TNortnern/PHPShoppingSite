<?php
  if(isset($_POST['prompt'])){
    echo "<div class='alert alert-danger emailtaken' role='alert'>That e-mail has been registered already.</div>";

  }
?>

<h1>Register</h1>
  <form method='POST' enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="username">Name</label>
      <input type="text" class="form-control admin" placeholder="Your name" name="username" pattern="^[a-zA-Z]+( [a-zA-Z]+)*$"
      <?php
        if(isset($_POST['username'])){
          echo "value='$_POST[username]'";
        }

      ?>
      required>
      <div class="invalid-feedback">Enter a valid name.</div>
    </div>
    <div class="form-group">
      <label for="useremail">E-mail</label>
      <input type="email" class="form-control" id="regemail" placeholder="E-mail" name="useremail" 
      <?php
        if(isset($_POST['useremail'])){
            echo "value='$_POST[useremail]' autofocus";
        }
        ?>
      required>
      <div class="invalid-feedback">Enter a valid email.</div>
      <?php 
      
      ?>
    </div>
    <div class="form-group">
      <label for="userpass">Password</label>
      <input id="password" type="password" class="form-control" placeholder="Password" name="userpass" pattern=".{6,}" required>
      <div id="inv" class="invalid-feedback">Your password must contain at least 6 characters.</div>
    </div>
    <div class="form-group">
      <label for="userpass">Confirm Password</label>
      <input id="passconfirm" type="password" class="form-control" placeholder="Confirm Password" name="passconfirm" pattern=".{6,}" required>
      <div class="invalid-feedback">Your passwords should match.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on the terms & conditions.
        <div class="invalid-feedback">Read the <a href="#">terms in conditions</a> then click the box to continue.</div>
      </label>
    </div>
    <input type="hidden" name="prompt">
    <div class="centerthings">
    <button type="submit" name='adduser' class="btn btn-success">Register</button>
    </div>
  </form>

  <?php
    if($_POST){
        if(isset($_POST['adduser'])){
            registerUser();
            
            
        }
    }