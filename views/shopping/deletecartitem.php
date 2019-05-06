<?php


if (isset($_POST['cartProductID'])) {
    foreach ($_SESSION['shopcart'] as $index => $deletion) {
        if ($_POST['cartProductID'] == $deletion['product_id']) {
            unset($_SESSION['shopcart'][$index]);
        }
// resort shop cart array

    }
    $_SESSION['shopcart'] = array_values($_SESSION['shopcart']);
    if(isset($_GET['cartItem'])){
        header("Location:index.php");
    }else{
    header("Location:?cart&rm");
    }
}
