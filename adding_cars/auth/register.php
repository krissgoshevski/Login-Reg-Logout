<?php 
require_once __DIR__ . "/../menu.php";
require_once __DIR__ . "/../autoland.php";

if((strlen($_POST['username']) < 6) || (strlen($_POST['password']) < 4)){
    header("Location: index.php?status=error&reason=usernamepwlenght");
    die();
}


$sql_insert = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";

$statement = $pdoconn->prepare($sql_insert);

if($statement->execute([
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_ARGON2ID)] // za hasniran pw 
)){
    header("Location: index.php?status=succesfullyRegisteredused");
    die();
}


//header("Location: index.php?status=error&reasonusernamepwlenght");
//die();
?>