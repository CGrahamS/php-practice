<?php
    $order_first_name = $_GET["orderFirstName"];
    $order_last_name = $_GET["orderLastName"];
    $order_full_name = $order_first_name . " " . $order_last_name;
    $order_amount = $_GET["orderAmount"];
    $order_amount_tax = ($order_amount * .15) + $order_amount;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Order Details!</h1>
    <p>
      Hi, <?php echo $order_full_name ?>!
    </p>
    <p>
      You have ordered <?php echo $order_amount ?> internet!
    </p>
    <p>
      This will cost you $<?php echo ($order_amount_tax) ?> after tax.
    </p>
    <p>
      We hope that's enough!
    </p>
    <p>
      - The Internet Keepers
    </p>
  </body>
</html>
