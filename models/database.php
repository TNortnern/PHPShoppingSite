<?php
$dsn = "mysql:host=localhost;dbname=northern_factory";
try{
$db = new PDO($dsn, 'root', '');
}catch(PDOException $e){
    echo $e->getMessage();
    die();
}
