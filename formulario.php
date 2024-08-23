<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>

    <?php require "clases.php";  ?>

  <main>

    <h1>PRODUCTS</h1>

    <br>

    <form class="products" action="actions.php" method="POST">

      <label for="name">Products' name</label>
      <input type="text" name="name" id="name-products" placeholder="Enter the products' name" required>

      <br>

      <label for="price">Price</label>
      <input type="text" name="price" id="price-products" placeholder="Enter the price" required>

      <br>

      <label for="status">Categoria</label>
        <?php
        $chivo=new User;
        $chivo->mostrarselect();
        ?>
      <br>

      <input type="hidden" name="hidden" value="1">

      <br>

      <button type="submit">Enter</button>

    </form>

  </main>
    
</body>
</html>