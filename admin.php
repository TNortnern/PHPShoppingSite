<?php
session_start();
include "views/global/headeradmin.php";
include "models/database.php";
include "models/product.php";
include "models/logindb.php";

if ($_SESSION['loggedin'] != "Y") {
    header("Location:index.php?nli");
}
if($_SESSION['A'] != "Y"){
    header("Location:index.php");
}

if(isset($_GET['mod'])){
    if($_GET['mod'] == "a"){
    echo "<div class='alert alert-success' role='alert'>$_GET[n] has been added as an product.</div>";
    }
    else if($_GET['mod'] == "d"){
        echo "<div class='alert alert-success' role='alert'>$_GET[n] has been deleted.</div>";
    }
    else if($_GET['mod'] == "m"){
         echo "<div class='alert alert-success' role='alert'>$_GET[n] has been modified.</div>";
    }
}

if(!isset($_GET['option'])){
    $_GET['option'] = null;
    $option = null;
}else{
$option = $_GET['option'];
}

if($option == 'add'){
    include "views/admin/add.php";
}
elseif($option == 'modify'){
    include "views/admin/modify.php";
}
elseif($option == 'delete'){
    include "views/admin/delete.php";
}
elseif(isset($_GET['summary'])){
    include "models/orderdb.php";
    include "views/admin/summary.php";
}
else{
    include "views/admin/productslist.php";
}

if(!isset($_POST['productID'])){
    $_POST['productID'] = NULL;
}
else{
$productID = $_POST['productID'];
}



include "views/global/footer.php";