<?php
    session_start()
?>
<!DOCTYPE html>

<html>
  </head>
    <body>
        <h2>Login Page</h2>
        <form action="auth_admin.php" method="POST">
            <p>
                <label for="username">Enter Username Here: </label>
                <input type="text" name="username" id="username" required>
            </p>
            <p>
                <label for="password">Enter Password Here: </label>
                <input type="password" name="password" id="password" required>
            </p>
            <p>
                <input type="submit" value="Login">
            </p>
        </form>
    </body>
</html>
