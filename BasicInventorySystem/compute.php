
  <link rel="stylesheet" href="styles.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['item_id'];
    $initialQuantity = intval($_POST['initial_quantity']);
    $outQuantity = intval($_POST['out_quantity']);
    $balance = $initialQuantity - $outQuantity;

    echo "<div class='balance-info'>";
    echo "<p>Product: $productName</p>";
    echo "<p>Balance: $balance</p>";
    echo "</div>";
}
?>
