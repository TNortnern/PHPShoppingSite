<?php
session_start();

if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location:index.php?login&lo");
}

if(isset($_GET['nli'])){
    header("Location:index.php?login&li");
}

if(!isset($_SESSION['R'])){
    $_SESSION['R'] = null;
}
if(!isset($_SESSION['A'])){
    $_SESSION['A'] = null;
}
if($_SESSION['R'] == "Y"){
include "views/global/headerlgin.php";
}
else if($_SESSION['A'] == "Y"){
    include "views/global/headeradmin.php";
}
else{
    include "views/global/header.php";
}



include "models/database.php";
include "models/product.php";
 if(isset($_GET['register'])){
    include "models/reigsterdb.php";
    include "views/login/register.php";
}
else if(isset($_GET['login'])){
    include "models/logindb.php";
    include "views/login/login.php";
}
 
else if(isset($_POST['buyMethod'])){
    if($_POST['buyMethod'] == 'oneclick'){
    include "models/orderdb.php";
    include "views/shopping/orderconfirm.php";
}else{
    include "views/shopping/addtocart.php";
    include "views/shopping/productDisplay.php";
}
}
else if(isset($_GET['cart'])){
    include "views/shopping/cart.php";
}
else if(isset($_POST['cartProductID'])){
    include "views/shopping/deletecartitem.php";
}
else if(isset($_GET['summary'])){
    include "models/orderdb.php";
    include "views/shopping/ordersummary.php";
}
else if(isset($_GET['order'])){
    include "views/shopping/order.php";
}
else{
    if(isset($_GET['product'])){
        include "views/shopping/fullProduct.php";
    }else{
    include "views/shopping/productDisplay.php";
    }
}





if(!isset($_POST['productID'])){
    $_POST['productID'] = NULL;
}
else{
$productID = $_POST['productID'];
}

// Required because orderconfirm.php wouldn't execute after form action
if (isset($_POST['order'])) {
    include "models/orderdb.php";
    orderProduct($productID);

}




include "views/global/footer.php";

?>

