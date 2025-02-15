<?php
// Ordersales.php: Item Selection Page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Items</title>
</head>
<body>
    <h1>Items to Buy</h1>
    <form action="Ordersummary.php" method="POST">
        <label for="item1">College Football 25 ($65):</label>
        <input type="number" name="item1" value="0" min="0"><br>

        <label for="item2">Halo 5 ($47):</label>
        <input type="number" name="item2" value="0" min="0"><br>

        <label for="item3">Alabama Football Tickets ($120):</label>
        <input type="number" name="item3" value="0" min="0"><br>

        <button type="submit">Submit Order</button>
    </form>
</body>
</html>

