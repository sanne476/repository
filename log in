<?php
    session_start();
    if(!$_SESSION) {
        $_SESSION["bIngelogd"] = false;
    }
//echo "Hello world";

if(isset($_POST["uitloggen"])) { 
   // $_SESSION = array();
    session_destroy();
}

if(isset($_POST["knop"])) {
    $c = [
        "Test" => "123",
        "Test2" => "456"
    ];

    foreach($c as $key => $value) {
        if($_POST['login'] == $key && $_POST['password'] == $value)
        $_SESSION["bIngelogd"] = true;
    }
    
    if($_SESSION["bIngelogd"]) {

    }
    else {
        echo " Inloggegevens incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        include "login.css";
</head>
<body>
    <h1> Home </h1> 
   
    <?php 
        if($_SESSION["bIngelogd"]) {
        echo "je bent ingelogd";
    ?>
    <form method="post">
        <input type="submit" name="uitloggen" value="uitloggen">
    </form>
    <?php
        } else {
            echo "Inloggen:<br>";
        
    ?>
    <form method="post">
        Name: <input type="text" name="login"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="knop"  value="inloggen">
    </form>
    <?php
    }
    ?>

</body>
