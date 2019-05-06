<?php
$productID = $_POST['productID'];
$amount = $_POST['amount'];
$price = $_POST['price'];
$size = $_POST['size'];
$added = true;
$product = getProduct($productID);
$item = $product['productName'];
$image = $product['imageName'];
if(isset($_POST['buyMethod'])){
    if($_POST['buyMethod'] == "addtocart"){

        if(isset($_SESSION['shopcart'])){
            // variable that will increment on each item added to append new product arrays
            $count = count($_SESSION['shopcart']);
            //gets the productID's column
            $ids = array_column($_SESSION['shopcart'], 'product_id');
            
            if(!in_array($productID, $ids)){
                $_SESSION['shopcart'][$count] = array(
                'product_id' => $productID,
                'product_name'=> $item,
                'product_price'=> $price,
                'product_amount' => $amount,
                'product_image' => $image,
                'product_size' => $size
            );
            }else{
                for($i = 0; $i < count($ids); $i++){
                    if($productID == $ids[$i]){
                        if($amount + $_SESSION['shopcart'][$i]['product_amount'] > $product['qty']){
                            echo "<div class='alert alert-danger'>Sorry, we only have $product[qty] in stock.</div>";
                            $added = false;
                        }else{
                        $added = true;
                        $_SESSION['shopcart'][$i]['product_amount'] += $amount;
                        }
                    }
                }
            }

        }else{
            $_SESSION['shopcart'][0] = array(
                'product_id' => $productID,
                'product_name'=> $item,
                'product_price'=> $price,
                'product_amount' => $amount,
                'product_image' => $image,
                'product_size' => $size
            );
        }

    }
}

// set temporary session variable to display added to cart message
if($added == true){
    $_SESSION['added'] = "set";
    header("Location:index.php");
    
}



// $newdata[0] = array(
//     'product_id' => '20',
//     'product_amount' => '17',
//     'product_price' => '300',
// );


// $count = count($newdata);

// echo "<h1>Product: $prod, Price = $$price, Amount: $quan</h1>"; 
// $anarray = array(
//     'product_id' => $prod,
//     'product_amount' => $quan,
//     'product_price' => $price
// );
// $anarrays = array(
//     'product_id' => $prod,
//     'product_amount' => $quan,
//     'product_price' => $price
// );

// $newdata[$count] = $anarray;
// $newdata[$count+1] = $anarrays;
// $count = count($newdata);

// echo "count is $count";
// $product_ids = array_column($newdata, 'product_id');

// pre_r($newdata);

// echo "<br>";

// pre_r($product_ids);

    function pre_r($array){
        echo "<pre>";
        print_r($array);
       echo "</pre>";
    }