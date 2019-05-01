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
        <a class="nav-link" href="index.php?summary">Order History</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <div class="nav-item">
      <a class="nav-link logged"><i class="fas fa-user-alt"></i>Logged in as <?php echo "$_SESSION[name]";?></a>
      </div>
      <div class="nav-item">
        <a class="nav-link logout" href="index.php?logout"><i class="fas fa-sign-in-alt"></i>Logout</a>
      </div>
    </form>
  </div>
</nav>
<div class="centerthings-flex-column" style=" width:100%;">
<div class="springSale" id="springSale">
    <h1> Spring Sale </h1>
    <h2>40% off everything</h2>
</div>
</div>