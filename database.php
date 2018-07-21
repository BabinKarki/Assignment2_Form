<?php
/**
 * Created by PhpStorm.
 * User: babin
 * Date: 7/18/18
 * Time: 11:05 PM
 */


$servername="localhost";
$username="root";
$password="root";
$db="php_class";

$conn=new mysqli($servername, $username, $password, $db);

//if($conn->connect_error){
//    die("Connection Failed:" . $conn->connect_error);
//}else{
//    echo "Connected to db successfully";
//}

?>