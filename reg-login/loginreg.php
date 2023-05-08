<?php 
session_start();

if(isset($_SESSION['username'])){
    
    //throw new \Exception("User is succesfully logged In !");
    $username = $_SESSION['username'];
    echo "Da ve izvestime deka uspesno ste logirani kako " . $username;
    unset($_SESSION['username']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action ="login.php">
    <h2>Login </h2>
    Email:
    <input type="text" name="email" id="emailusername" /> <br>
    Password:
    <input type="password" name="password" id="logpassword" required />
    <button>Login</button>
    </form> <br> <br> <br>




    <form method="POST" action="register.php">
        <h2>Register</h2>
    Email:
    <input type="text" name="email" id="email"/> <br>
    Username:
    <input type="text" name="username" id="username"/> <br>

    Password:
    <input type="password" name="password" id="regpassword"/> <br>
    <button>Register</button>
    </form> <br> <br>

    <form method="POST" action ="logount.php">
        <button name="logout">Log out</button>
    </form>
    
</body>
</html>