<?php


function orderProduct($productID){
    global $db;
    $customername = $_POST['username'];
    $customeremail = $_POST['useremail'];
    if($_SESSION['R'] == "Y"){
    $customerID = $_POST['userID'];
    }else{
        // if the user isn't logged in, this prevents them from tracking their order. LOG IN!!
        $customerID = -1;
    }
    $amount = $_POST['amount'];
    $qty = $_POST['prodqty'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $updatedQty = $qty - $amount;

    $sql = "UPDATE `product` SET `qty` = $updatedQty WHERE `product`.`productID` = $productID";
    $qry = $db->query($sql);
    $ordersql = "INSERT INTO `orders` (`orderID`, `productID`, `customerName`, `customeremail`, `customerID`, `qtyOrdered`, `price`, `size`) VALUES (NULL, '$productID', '$customername', '$customeremail', $customerID, '$amount', '$price', '$size')";
    $orderqry = $db->query($ordersql);
    if(!$qry){
        echo die("Get Query Failed");
    }
    if(!$orderqry){
        echo die(" Order Query Failed");
    }
}



function orderProducts($productID, $amount, $qty, $size, $price){
    global $db;
    $customername = $_POST['username'];
    $customeremail = $_POST['useremail'];
    if($_SESSION['R'] == "Y"){
    $customerID = $_POST['userID'];
    }else{
        // if the user isn't logged in, this prevents them from tracking their order. LOG IN!!
        $customerID = -1;
    }
    
    // $amount = $_POST['amount'];
    // $qty = $_POST['prodqty'];
    // $price = $_POST['price'];
    // $size = $_POST['size'];
    $updatedQty = $qty - $amount;

    $sql = "UPDATE `product` SET `qty` = $updatedQty WHERE `product`.`productID` = $productID";
    $qry = $db->query($sql);
    $ordersql = "INSERT INTO `orders` (`orderID`, `productID`, `customerName`, `customeremail`, `customerID`, `qtyOrdered`, `price`, `size`) VALUES (NULL, '$productID', '$customername', '$customeremail', $customerID, '$amount', '$price', '$size')";
    $orderqry = $db->query($ordersql);
    if(!$qry){
        echo die("Get Query Failed");
    }
    else if(!$orderqry){
        echo die(" Order Query Failed");
    }else{
        unset($_SESSION['shopcart']);
        header("Location:index.php?success");
    }
}

function getOrderHistory($customerID){
    global $db;
    $sql = "SELECT * FROM orders WHERE customerID = '$customerID'";
    $qry = $db->query($sql);
    $orders = $qry->fetchAll();
    return $orders;
}

function getOrders(){
    global $db;
    $sql = "SELECT * FROM orders";
    $qry = $db->query($sql);
    $orders = $qry->fetchAll();
    return $orders;
}