<?php

// require mySQL connection
require('database/DBController.php');

// require product class
require('database/Product.php');

// require cart class
require('database/Cart.php');

// DBController Object
$db = new DBController();

// product object
$product = new Product($db);

// product
$product_shuffle = $product->getData();

// print_r($product->getData());

// cart object
$Cart = new Cart($db);

// $arr = array("user_id" => 1, "item_id" => 13);
// $cart->insertIntoCart($arr);

?>