<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="<?= base_url("login/proses") ?>"
            method="POST">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="user"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="pass"><br>
        <input type="submit" value="Login">
    </form>

    <?php 
    if(isset($username) && isset($password)){
        echo "Username anda {$username}, 
                Password anda {$password}";
    }
    ?>
</body>
</html>