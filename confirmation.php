<?php
session_start();

if (!isset($_SESSION['authenticate'])) {
    header("Location: index.php");
    exit();
}

$cardType = $_SESSION['cardType'];
$totalAmount = $_SESSION['totalAmount'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h1>Payment Confirmation</h1>
    <p>Your <?php echo htmlspecialchars($cardType); ?> card has been successfully charged $<?php echo number_format($totalAmount, 2); ?>.</p>
    <form action="index.php" method="GET">
        <button type="submit">Return to Shopping</button>
    </form>
</body>
</html>
