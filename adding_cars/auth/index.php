<?php 
require_once __DIR__ . "/../autoland.php";
// kod za ako e najaven t.e. logiran veke korisnikot da ne se najavuva pak ! 
// da ne me nosi na ovaa forma za logiranje i register ! 
// koga ke otidam logout togas ke mozam pak da pristapam za logiranje 
if (isset($_SESSION['username'])){
    header("Location: " . APP_URL . "/cars/indexlist.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register form</title>
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles/logregform.css">
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles/menu.css">

</head>
<body>
    <?php require_once __DIR__ . "/../menu.php"?>
    <h2 style='text-align:center'>Firstly you must register, after that you can log in ! </h2> <br>
    <?php 
    if(isset($_GET['status']))
    {
        
        if($_GET['status'] == 'succesfullyRegisteredused'){
        echo "<p class='succreguser'>Succesfully registered, now you can log in</p>";
        }
               
        else if ($_GET['status'] == 'error')
        {
            $msg = "";

            if($_GET['reason'] == 'usernamepwlenght'){
                $msg = "Username or pw must be at least 4 and 6 chars";
            }

            if($_GET['reason'] == 'notfoundThisUser'){
                $msg = "Not found this user";

            }
            else if ($_GET['reason'] == 'passwordinvalid'){
                $msg = "Invalid password";
            }
            echo "<p class='error'>$msg</p>";
        }
    }
    
    
    ?>
                         <!-- LOGIN -->
    <form method="POST" action="login.php" class="logregform">
        <h2>Login</h2>
        <label for="emailusername">Email / Username</label>
        <input type="text" name="email" id="emailusername"/> <br>

        <label for="logpassword">Password</label>
        <input type="password" name="password" id="logpassword" required/> <br>
        <button>Login</button>
    </form> 



                            <!-- REGISTER -->
    <form method="POST" action="register.php" class="logregform">
        <h2>Register</h2>
        <label for="emai">Email</label>
        <input type="text" name="email" id="emai"/> <br>

        <label for="username">Username</label>
        <input type="text" name="username" id="username"/> <br>

        <label for="regpassword">Password</label>
        <input type="password" name="password" id="regpassword" required/>  <br>
        <button>Register</button>
    </form>
</body>
</html>