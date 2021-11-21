<?php
// shuffle the product
shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['new_arrivals_submit'])) {
        // call method add to cart 
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<!-- New Arrivals -->
<div id="new-arrivals">
    <div class="container">
        <h4 class="font-montagu">New Arrivals</h4>
        <hr />
        <!-- carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item) { ?>
            <div class="item py-2 bg-light">
                <div class="product font-poppins">
                    <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']); ?>"
                    ><img
                            src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>"
                            alt="product1"
                            class="img-fluid"
                        /></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? "Unknown" ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? "Unknown" ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <button type="submit" name="new_arrivals_submit" class="btn btn-warning font-size-12">
                            Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } // end foreach ?>
        </div>
    </div>
</div>