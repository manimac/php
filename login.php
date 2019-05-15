<?php
session_start();

if(isset($_SESSION['username'])&& isset($_SESSION['useremail'])){
    header("location:about.php");
}
if(isset($_POST['login'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $_SESSION['username'] = $name;
    $_SESSION['useremail'] = $email;
    header("location:about.php");
}


?>


<html>
    <head>
    </head>
    <body>
    
    <form method="post">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="submit" name="login" value="Login">
    </form>
    
    
    </body>
</html>