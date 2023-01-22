<?php
   
    require_once'connect.php';
    session_start(); 
     
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
            
            $_SESSION['username'] = $row['login'];
            $_SESSION['password'] = $row['password'];
            header('Location: main.php');

        }else{
            ?>
            <script>
            setTimeout(function(){
            alert("Wprowadziłeś złe dane");
            window.location.href = "index.php";
            },500);
            </script>
            <?php
        }
    }

   
?>