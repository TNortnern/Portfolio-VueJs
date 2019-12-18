<?php

$dsn = "mysql:host=localhost; dbname=receive_messages";

try{
    $db = new PDO($dsn, "root", "");
}catch(PDOException $e){
    echo "not working: $e->getMessage()";
    die();
}


function receieveMessage(){
    global $db;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $date = date("d-M-Y, D");

    $sql = "INSERT INTO `message` (`messageId`, `name`, `email`, `number`, `message`,`date`) VALUES (NULL, '$name', '$email', '$number', '$message', '$date')";
    $qry = $db->query($sql);

    if(!$qry){
        die("Doesn't work.");
    }
}