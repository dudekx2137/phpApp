<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logout.php">
        <button type="submit" id="logoutButton">Logout</button>
    </form>
<?php
        session_start();    
        include'is_user_logged.php';
        echo "hello world - "." ".$_SESSION['username'];
?>
</body>
</html>