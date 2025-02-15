<?php
session_start(); 

if (isset($_SESSION['subtotal'])) {
  $subtotal = $_SESSION['subtotal'];
  
  $taxRate = 0.095; 
  $tax = $subtotal * $taxRate;
  $total = $subtotal + $tax;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tax Calculation</title>
</head>
<body>
  <h1>Tax Rate</h1>

  <?php if (isset($subtotal)) { ?>
    <p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
    <p>Tax (9.5%): $<?php echo number_format($tax, 2); ?></p>
    <p>Total: $<?php echo number_format($total, 2); ?></p>
  <?php } else { ?>
    <p>Error: No order subtotal found. Please return to the order page.</p>
  <?php } ?>

  <form action="Login.php" method="POST">
    <button type="submit">Proceed to Checkout</button>
  </form>

  <form action="index.php" method="GET">
    <button type="submit">Edit Order</button>
  </form>
</body>
</html>
