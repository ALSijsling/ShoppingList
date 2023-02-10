<?php include("views/partials/head.php"); ?>

<header>
    <h1>Add Groceries</h1>
</header>

<?php include("views/partials/nav.php"); ?>

<form id="addGroceries" method="POST" action="/add-grocery">
    <label for="name">Product</label><br>
    <input type="text" name="name" value=""><br><br>
    <label for="number">Quantity</label><br>
    <input type="number" name="number" min="0" value=""><br><br>
    <label for="price">Price</label><br>
    <input type="number" name="price" min="0" step="0.01" value=""><br><br>
    <input type="submit" value="Add to Shopping List">
</form>

<?php include("views/partials/footer.php");
