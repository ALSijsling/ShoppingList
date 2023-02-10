<?php

require "controllers/grocery.php";

$groceries = $app["database"]->selectAll("groceries", "grocery");

$total = 0;

foreach ($groceries as $grocery) {
    $subtotal = $grocery->price * $grocery->number;
    $total = $total + $subtotal;
}

require "views/index.view.php";
