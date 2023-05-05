<?php 

require_once __DIR__ . "/../autoland.php";

$email = $_POST['email'];
$password = $_POST['password'];

// validacija od baza dali postoe takov email / ili username 
$sql_select = "SELECT * FROM users WHERE email = :email OR username = :email"; // moze da se najavam i so email i so username 
$statement = $pdoconn->prepare($sql_select);
$statement->execute(['email' => $email]);

// ako nema takov row u baza t.e. ako nema takov email 
if($statement->rowCount() == 0){
    header("Location: index.php?status=error&reason=notfoundThisUser");
    die();
}

$user = $statement->fetch();

// password_verify - gotova f-ja za proverka dali postoi toj pw u baza i so e vnese 
// $password,->kriss1234 //  $user['password'] -> hasiran od bazata
/// vraka true ako $password === $user['password'] t.e. so hesiraniot 

if(password_verify($password, $user['password'])){
    $_SESSION['username'] = $user['username']; // preku sesija go prakam username-ot na logiraniot korisnik
    header("Location: " . APP_URL . "/cars/indexlist.php"); // uspesno ako e logiran 
    die();
}

header("Location: index.php?status=error&reason=passwordinvalid"); // za ako ne e tocen pw za login form 
die();


?>