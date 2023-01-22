<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpSite</title>
    <style>
        .test{
            color: blue;
        }
        fieldset{
            width: 10%;
        }
    </style>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Register</legend>
            <label class="test">Login:
                <input type="text" placeholder="Login" name = "username">
            </label>
            <label class="test">Password:
                <input type="password" placeholder="Password" name = "password">
            </label>
            <label class="test">Password:
                <input type="password" placeholder="Repeat Password" name = "password2">
            </label>
            <label class="test">Email:
                <input type="email" placeholder="Email" name = "email">
            </label>
            <button type="submit">Potwierdz</button>
            <button type="submit" formaction="index.html">Zaloguj</button>
        </fieldset>
    </form>
    <?php
        session_start();
        require_once"connect.php";
        error_reporting(E_ALL ^ E_NOTICE);  
        $conn = @mysqli_connect($host, $db_user, $db_password, $db_name);

        if (mysqli_connect_errno()!=0)
        {
            echo "Debug: ".mysqli_connect_errno();
        }else{
            $login = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $email = $_POST['email'];
            $queryCheck = "SELECT * FROM users WHERE login = '$login' OR email = '$email'";
            $result = mysqli_query($conn, $queryCheck);
            $row = mysqli_fetch_assoc($result);
            if($row['login'] == $login || $row['email'] == $email){
                echo "<h2>Istnieje użytkownik z takim samym loginem badz mailem!</h2>";
            }else{
                if($password == $password2){
                    $userInsertQuery = "INSERT INTO users (login, password, email) Values('$login','$password','$email')";
                    $result = mysqli_query($conn, $userInsertQuery);
                    echo "<h2>Konto dodano pomyślnie</h2>";
                }else{
                    echo "<h2>Podane hasła nie są takie same!</h2>";
                }
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>