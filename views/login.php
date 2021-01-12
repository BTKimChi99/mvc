<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="content">
        <div class="register" id="login">
            <h3>Login user</h3>
            <form action="" method="POST" class="validate">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><a href="">Forgot password?</a></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/validation.js"></script>
</body>
</html>