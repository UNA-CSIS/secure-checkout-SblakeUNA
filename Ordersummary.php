<?php
  session_start(); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $game1quan = $_POST['item1'];
      $game2quan = $_POST['item2'];
      $alabamaquan = $_POST['item3'];

      $game1price = 65;
      $game2price = 47;
      $alabamaprice = 120;

      $subtotal = ($game1quan * $game1price) + ($game2quan * $game2price) + ($alabamaquan * $alabamaprice);
      
      $_SESSION['subtotal'] = $subtotal;  // Use 'subtotal' instead of 'subtotal price'
  } else {
      header("Location: ordersales.php");
      exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Summary!</title>
</head>
<body>
    <h1>Order Summary</h1>
    
    <p>Subtotal: $<?php echo number_format($_SESSION['subtotal'], 2); ?></p>
    
    <form action="taxsummary.php" method="POST">
        <button type="submit">Confirm Purchase</button>
    </form>

    <form action="index.php" method="GET">
        <button type="submit">Edit Order</button>
    </form>
</body>
</html>
