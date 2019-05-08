<?php 

function registerUser(){
    global $db;
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpass = $_POST['userpass'];
    $userpass = md5($userpass);
    $checksql = "SELECT * FROM users WHERE useremail = '$useremail'";
    $checkqry = $db->query($checksql);
    $email = $checkqry->fetch();
    if(!empty($email)){
//         header("Location:index.php?register&at&e=$_POST[useremail]&n=$_POST[username]");

      
    
        if(!$email){
        die("Query Failed");
    }
    }
    else{
    $sql = "INSERT INTO `users` (`userID`, `username`, `userpass`, `useremail`, `admin`) VALUES (NULL, '$username', '$userpass', '$useremail', 'No')";
    $qry = $db->query($sql);
    header("Location:index.php?ac");
    if(!$qry){
        die("Query Failed");
    }
    }

    

    
    
}