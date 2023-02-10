<?php include("views/partials/head.php"); ?>

<header>
    <h1>Shopping List</h1>
</header>

<?php include("views/partials/nav.php"); ?>

<table id="ShoppingList">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($groceries as $grocery){
            echo "<tr>";
            echo "<td class='name'>".ucwords($grocery->name)."</td>";
            echo "<td class='price'>"."&euro; ".$grocery->price."</td>";
            echo "<td class='number'>".$grocery->number."</td>";
            echo "<td class='subtotal'>".$grocery->price*$grocery->number."</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td id="total" colspan="3">Total</td>
            <td id="totalCost"><?= $total ?></td>
        </tr>
    </tbody>
</table>

<?php include("views/partials/footer.php");
