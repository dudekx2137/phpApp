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
        include'register_form.php';
    ?>
</body>
</html>