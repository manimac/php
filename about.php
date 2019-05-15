<?php 

session_start();

if(isset($_SESSION['username'])&& isset($_SESSION['useremail'])){
    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['useremail'] . "<br>";
}
else{
    header("location:login.php");
}

if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
}
?>
About page

<form method="post">
<input type="submit" name="logout" value="Logout">
</form>