<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Inventory System</title>
</head>
<body>
  <div class="inventory">
    <h1>Inventory System</h1>
    <form class="item-form" action="compute.php" method="post">
      <label for="item-select">Select an item:</label>
      <select id="item-select" name="item_id">
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
        <option value="Apple">Apple</option>
        <!-- Add more options here -->
      </select>
      <label for="initial-quantity">Initial Quantity:</label>
      <input type="number" id="initial-quantity" name="initial_quantity" min="0" required>
      <label for="out-quantity">Out:</label>
      <input type="number" id="out-quantity" name="out_quantity" min="0">
      <button type="submit">Add to Inventory</button>
    </form>
    <div class="item-list">
    </div>
  </div>
</body>
</html>
