<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
    <nav>
    <div class="main-wrapper">
    <ul>
    <li><a href="index.php">Home</a></li>
    </ul>
    <div class="nav-login">
    
    <form action = "includes/login.inc.php" method = "POST">
    <input type="text" name = "uid" placeholder = "Username/Email">
    <input type="password" name= "pwd" placeholder = "Password">
    <button type = "submit" name = "login">Login</button>
    </form>
    <a href="signup.php">Sign Up</a>
    </div>
    </div>
    </nav>
    </header>