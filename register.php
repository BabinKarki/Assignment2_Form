<?php
/**
 * Created by PhpStorm.
 * User: babin
 * Date: 7/18/18
 * Time: 10:50 PM
 */

include_once 'database.php';

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);


$stmt=$conn->prepare(
    "Insert into assign2 (fname, lname, dob, email, username, password) VALUES (?, ?, ? , ? , ? , ?)");

$stmt->bind_param(
    "sssssd",$fname, $lname, $dob, $email, $username ,$password );

$stmt->execute();
$stmt->close();
$conn->close();


?>