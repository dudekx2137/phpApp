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
            $result = mysqli_query($conn, "SELECT login from users where login = '$login'");
            $result2 = mysqli_query($conn, "SELECT email from users where email = '$email'");
            if(mysqli_num_rows($result) > 0){
            ?>
            <script>
                alert("Istnieje użytkownik z takim samym loginem!");
            </script>
            <?php
            }elseif(mysqli_num_rows($result2) > 0 ){
                ?>
                <script>
                        alert("Istnieje użytkownik z takim samym emailem!");
                </script>
                <?php
            }elseif($login == ""){
                ?>
                <script>
                        alert("Prosze wprowadzić login!");
                </script>
                <?php
            }elseif($password == ""){
                ?>
                <script>
                        alert("Prosze wprowadzić haslo");
                </script>
                <?php
            }elseif($email == ""){
                ?>
                <script>
                        alert("Prosze wprowadzić email");
                </script>
                <?php
            }
            else{
                if($password == $password2){
                    $userInsertQuery = "INSERT INTO users (login, password, email) Values('$login','$password','$email')";
                    $result = mysqli_query($conn, $userInsertQuery);
                    ?>
                    <script>
                        alert("Success!");
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Podane hasła nie są takie same!");
                    </script>
                    <?php
                }
            }
            mysqli_close($conn);
        }
    ?>