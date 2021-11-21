<?php
ob_start();

// include header.php file
include('header.php');
?>

<?php
// include banner area file
include('templates/banner-area.php');

// top sale file
include('templates/top-sale.php');

// today price
include('templates/today-price.php');
?>

<br />
<br />

<?php
// include new-arrivals
include('templates/new-arrivals.php');

// latest blogs
include('templates/latest-blogs.php');
?>

<?php
// include footer file
include('footer.php');
?>