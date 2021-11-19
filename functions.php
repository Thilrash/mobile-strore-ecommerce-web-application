<?php

// require mySQL connection
require('database/DBController.php');

// require product class
require('database/Product.php');

// DBController Object
$db = new DBController();

// product object
$product = new Product($db);

// print_r($product->getData());

?>