<?php
if(isset($_SESSION['loggedin'])){
    header("Location:index.php");
}

if(isset($_GET['lo'])){
      echo "<div class='centerthings'><h5 class='alert alert-success'>Successfully logged out. hope you enjoyed your stay.</h5></div>";
    }

?>

<h1>Login</h1>
    <?php
    if(isset($_GET['ii'])){
    echo "<div id='invalidinfo' class='alert alert-danger'>Invalid login information.</div>";
    }
    ?>
  <form method='POST' enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="useremail">E-mail</label>
      <input type="email" class="form-control" id="regemail" placeholder="E-mail" name="useremail" 
      <?php 
      if(isset($_GET['e'])){
        echo "value='$_GET[e]' autofocus";
      }
      ?>
      required>
      <div class="invalid-feedback">Enter valid email.</div>
      <?php if(isset($_GET['nr'])){
          echo "<div id='emailtaken'>That e-mail doesn't exist. Click <a href='index.php?register'>here</a> to register.</div>";
      }
      ?>
    </div>
    <div class="form-group">
      <label for="userpass">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="userpass" pattern=".{6,}" required>
      <div class="invalid-feedback">Your password must contain at least 6 characters.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div class="centerthings">
    <button type="submit" name='loginuser' class="btn btn-success">Login</button>
    </div>
  </form>

  <?php
   
   if($_POST){
       if(isset($_POST['loginuser'])){
           login();
       }
   }