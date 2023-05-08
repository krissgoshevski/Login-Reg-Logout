<?php 
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/conndb.php";
session_start();


$sql = "INSERT INTO users (username, email, password) values (:username, :email, :password)";
$stmt = $conn->prepare($sql);

$data = [
'username' => $_POST['username'],
'email' => $_POST['email'],
'password' => password_hash( $_POST['password'], PASSWORD_ARGON2ID)
];

if($stmt->execute($data)){
    header("Location: loginreg.php?status=successfullRegisteredUser"); die();
}

header("Location: loginreg.php?status=error"); die();


?>