<?php

function displayProducts()
{
    global $db;
    $sql = "SELECT * FROM product";
    $qry = $db->query($sql);
    $products = $qry->fetchAll();
    return $products;

}

function getProduct($productID)
{
    global $db;
    $sql = "SELECT * FROM product WHERE productID = '$productID'";
    $qry = $db->query($sql);
    $item = $qry->fetch();
    return $item;
}

function getProductByName($prodName)
{
    global $db;
    $sql = "SELECT * FROM product WHERE productName = '$prodName'";
    $qry = $db->query($sql);
    $item = $qry->fetch();
    return $item;
}

function addProduct()
{
    global $db;
    $prodname = $_POST['prodname'];
    $prodprice = $_POST['prodprice'];
    $prodqty = $_POST['prodqty'];
    $proddesc = $_POST['proddesc'];
    $prodimg = $_FILES['prodimg']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES['prodimg']['name']);
    move_uploaded_file($_FILES['prodimg']['tmp_name'], $target_file);
    $fileName = basename($_FILES['prodimg']['name']);
    $checksql = "SELECT * FROM product WHERE productName = '$prodname'";
    $checkqry = $db->query($checksql);
    $exists = $checkqry->fetch();
    if (!empty($exists)) {
        // Error Message Displays
    } else {
        $sql = "INSERT INTO `product` (`productID`, `productName`, `imageName`, `price`, `qty`, `description`) VALUES (NULL, '$prodname', '$prodimg', '$prodprice', '$prodqty', '$proddesc')";
        $qry = $db->query($sql);
        header("Location:admin.php?mod=a&n=$prodname");
        if (!$qry) {
            die("Query Failed");
        }
    }

}

function modifyProduct($productID)
{
    global $db;
    $prodname = $_POST['prodname'];
    $prodprice = $_POST['prodprice'];
    $prodqty = $_POST['prodqty'];
    $proddesc = $_POST['proddesc'];
    if (isset($_FILES['prodimg']['name'])) {
        $prodimg = $_FILES['prodimg']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES['prodimg']['name']);
        move_uploaded_file($_FILES['prodimg']['tmp_name'], $target_file);
    }
    $keepimg = $_POST['productimg'];

    if (isset($keepimg) && empty($_FILES['prodimg']['name'])) {
        $sql = "UPDATE `product` SET `productName` = '$prodname', `imageName` = '$keepimg', `price` = '$prodprice', `qty` = '$prodqty', `description` = '$proddesc' WHERE `product`.`productID` = $productID";
        header("Location:admin.php?mod=m&n=$_POST[prodname]");
    } else {
        $sql = "UPDATE `product` SET `productName` = '$prodname', `imageName` = '$prodimg', `price` = '$prodprice', `qty` = '$prodqty', `description` = '$proddesc' WHERE `product`.`productID` = $productID";
        header("Location:admin.php?mod=m&n=$_POST[prodname]");
    }
    $qry = $db->query($sql);
    if (!$qry) {
        die('Query FAILED');
    }
}

function deleteProduct($productID)
{
    global $db;
    $sql = "DELETE FROM `product` WHERE `product`.`productID` = $productID";
    $qry = $db->query($sql);
    $qry = $db->query($sql);
    if (!$qry) {
        die('Query FAILED');
    }
}
