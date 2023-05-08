<?php 
require_once __DIR__ . "/conndb.php";
require_once __DIR__ . "/functions.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//validation, if exist that user from database
// can sign in, with email or username
$sql = "SELECT * FROM users WHERE email = :email OR username = :email";
$stmt = $conn->prepare($sql);
$stmt->execute(['email' => $email]);

if($stmt->rowCount() == 0){
    echo"do not exist that user!"; die();
}

$user = $stmt->fetch(); // because we lisy only one user from db

if(password_verify($password, $user['password'])) // password_verify function hasn pw from db === $_POST['password']
{
    $_SESSION['username'] = $user['username']; // send username from db with session
    header("Location: loginreg.php?status=succesfullLoggedIn"); die();
}

header("Location: loginreg.php?status=error&reason=invalidpw"); die();



?>