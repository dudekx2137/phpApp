<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .nav_bar{
            height: 4rem;
            background-color: rgb(31, 31, 153);
            display: flex;
            justify-content: center;
        }
        .main_container{
            background-color: darkgoldenrod;
            height: 15rem;
        }
    </style>
</head>
<body>
    <div class="nav_bar">
        <form action="logout.php" class="logoutButton">
            <button type="submit" id="logoutButton">Logout</button>
        </form>
        <form>
            <button>My account</button>
            <button>Cost tam</button>
            <button>Cos tam2</button>
        </form>
    </div>
    <div class = "main_container">
        <h2>siema</h2>
    </div>
<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start(); 
    include'is_user_logged.php';
?>
</body>
</html>