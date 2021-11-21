<?php

// require MySQL Connection
require ('../database/DBController.php');

// require product class
require('../database/Product.php');

// DBController object
$db = new DBController();

// product object
$product = new Product($db);

if(isset($_POST['itemid'])) {
    // product
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

?>