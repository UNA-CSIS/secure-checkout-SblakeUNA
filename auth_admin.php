<?php
session_start();

include 'allow.php';

$username = $_POST["username"];
$password = $_POST["password"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = testInput ($username);
    $password = testInput ($password);
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($password === $username && ($password !== "" || $username !== "")) {
            $_SESSION['authenticte'] = true;
            echo "Hi There," . $username . "Thank you for logging in you may now proceed."
        
        ?>
        <form method="post" action="checkout.php">
            <p>
                <input type="submit" name="continue" value="Checkout">
            </p>
        </form>
        <?php
        } else {
            echo "You do not have the correct login to continue please retry!"
            ?>
            <form method="POST" action="Login.php">
                <p>
                    <input type="submit" name="back" value="Return to Login">
                </p>
            </form>
            <?php
        }
        ?>
    </body>
</html>
