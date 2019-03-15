<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" control="IE-edge">
        <title>Login</title>
        <meta name="viewport" content="width-device-width, initial-scale-1">
    </head>
    <body>
        <form method="generateToken" action="Login.php">
            <div class="container">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <br><br>
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br>
                <input type="button" type="submit" name="submit" value="Login">
            </div>
        </form>
    </body>
</html>