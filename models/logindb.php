<?php

function login(){
    global $db;
    $useremail = $_POST['useremail'];
    $userpass = $_POST['userpass'];

    $checksql = "SELECT * FROM users WHERE useremail = '$useremail' AND userpass = '$userpass'";
    $checkqry = $db->query($checksql);
    $exists = $checkqry->fetch();

    if($exists){
        $name = $exists['username'];
        $admin = $exists['admin'];
        $email = $exists['useremail'];
        $ID = $exists['userID'];
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['ID'] = $ID;
        if($admin == "No"){
            $_SESSION['R'] = "Y";
            $_SESSION['loggedin'] = "Y";
         header("Location:index.php?sc=$name");
        }else{
            $_SESSION['A'] = "Y";
            $_SESSION['loggedin'] = "Y";
            header("Location:admin.php?$name");
        }

    }else{
        header("Location:index.php?login&ii&e=$useremail");
    }
}