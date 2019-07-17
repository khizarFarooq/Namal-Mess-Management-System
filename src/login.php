<?php
include('conn.php');
?>

<html>
<head>
    <title>Login</title>
    
</head>
    <body>
        <form action="login_process.php" method="post">
        Username <br>
        <input type="text" name="username" id="username" required><br>
        Password<br>
        <input type="password" name="pass" id="pass" required><br>
            <input type="submit" value="Login">
            
        </form>
    </body>

</html>