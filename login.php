<?php
    session_start();
    require_once'connect.php';

    error_reporting(E_ALL ^ E_NOTICE);  
    $conn = @mysqli_connect($host, $db_user, $db_password, $db_name);
    if (mysqli_connect_errno()!=0)
    {
        echo "Debug: ".mysqli_connect_errno();
    }else{
        $login = $_POST['username'];
        $password = $_POST['password'];
        $queryCheck = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
        $result = mysqli_query($conn, $queryCheck);
        $row = mysqli_fetch_assoc($result);
        if($row['login'] == $login && $row['password'] == $password){
            header('Location: main.php');
            $_SESSION['username'] = $row['login'];
        }else{
            echo "<h2>Wprowadziłeś złe dane</h2>";
        }
    }

   
?>