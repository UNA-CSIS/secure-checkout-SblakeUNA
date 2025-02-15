<?php
session_start();

$totalAmount = isset($_SESSION['subtotal']) ? $_SESSION['subtotal'] * 1.095 : 0;
$cardType = '';
$creditCard = '';

if (!isset($_SESSION['authenticate'])) {
    header("Location: index.php");
    exit();
}
?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Checkout</title>
        </head>
        <body>
            <h1>Checkout</h1>
            <p>Total: $<?php echo number_format($totalAmount, 2); ?></p>
            <form action="confirmation.php" method="POST">
                <label for="cardType">Card Type:</label>
                <select name="cardType" id="cardType" required>
                    <option value="VISA">VISA</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="AMEX">AMEX</option>
                </select><br><br>

                <label for="creditCard">Credit Card Number:</label>
                <input type="text" name="creditCard" id="creditCard" maxlength="20" value="<?php echo htmlspecialchars($creditCard); ?>" required><br><br>

            <button type="submit">Pay Now</button>
        </form>
    </body>
</html>
