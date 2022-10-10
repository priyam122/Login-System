<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e8d20b168.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="#">
                <img class="logo" src="img/logo.svg" alt="logo">
            </a>
            <ul class="nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="">Extra</a></li>
                <li class="nav-item"><a class="nav-link" href="">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
            </ul>
            <div class="row">
            <?php
                if (isset($_SESSION['userId'])){
                    echo '<form class="form-inline" action="includes/logout.inc.php" method="post">
                    <button class="btn btn-secondary btn-sm login-out-btn" type="submit" name="logout-submit">Logout</button>
                </form>';
                }
                else {
                    echo '<form class="form-inline" action="includes/login.inc.php" method="post">
                    <input class="form-control form-control-sm navform" type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input class="form-control form-control-sm navform" type="password" name="pwd" placeholder="Password">
                    <button class="btn btn-secondary btn-sm login-out-btn" type="submit" name="login-submit">Login</button>
                </form>
                <button class="btn btn-outline-secondary btn-sm signup-btn><a href="signup.php">Signup</a></button>';
                }
                ?>
                
                
            </div>
        </nav>
    </header>