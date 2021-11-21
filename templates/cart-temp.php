<!-- shopping cart details -->
      <section id="cart" class="py-3 mb-5">
        <div class="container-fluid w-75">
          <h5 class="font-montagu font-size-20">Shopping Cart</h5>

          <!-- shopping cart items -->
          <div class="row">
            <div class="col-sm-9">

                <!-- starting for eachloop -->
                <?php 
                  foreach ($product->getData('cart') as $item) : 
                    $cart = $product->getProduct($item['item_id']);
                    // print_r($cart);
                    // print_r($item);
                    $sub_total[] = array_map(function($item) {
                ?>

                <!-- cart items -->
                <div class="row border-top py-3 mt-3">
                  <div class="col-sm-2">
                    <img
                      src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>"
                      alt="product"
                      class="img-fluid"
                      style="height: 120px"
                    />
                  </div>
                  <div class="col-sm-8">
                    <h5 class="font-montagu font-size-20">
                      <?php echo $item['item_name'] ?? "Unknown"; ?>
                    </h5>
                    <small><?php echo $item['item_brand'] ?? "Brand"; ?></small>
                    <!-- product rating -->
                    <div class="d-flex">
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <a
                        href="#"
                        class="px-2 font-montagu font-size-12 color-secondary"
                        >18,574 ratings</a
                      >
                    </div>

                    <!-- product quantity -->
                    <div class="qty d-flex pt-2">
                      <div class="d-flex font-montagu w-25">
                        <button class="qty-up border bg-light" data-id="pro1">
                          <i class="fas fa-angle-up"></i>
                        </button>
                        <input
                          type="text"
                          class="qty_input border px-2 w-50 bg-light"
                          disabled
                          value="1"
                          placeholder="1"
                          data-id="pro1"
                        />
                        <button class="qty-down border bg-light" data-id="pro1">
                          <i class="fas fa-angle-down"></i>
                        </button>
                      </div>
                      <button
                        type="submit"
                        class="btn text-danger px-3 border-right font-montagu"
                      >
                        Delete
                      </button>
                      <button
                        type="submit"
                        class="btn text-danger px-3 font-montagu"
                      >
                        Save for Later
                      </button>
                    </div>
                  </div>
                  <div class="col-sm-2 text-right">
                    <div class="font-size-20 text-danger font-montagu">
                      $<span class="product_price"><?php echo $item['item_price'] ?? 0; ?></span>
                    </div>
                  </div>
                </div>
                
                <!-- end foreach loop -->
                <?php 
                      return $item['item_price'];
                    }, $cart); // closing call back function
                    // print_r($sub_total);
                  endforeach; 
                  // print_r($sub_total);
                ?>

            </div>
            <div class="col-sm-3">
              <!-- sub total -->
              <div class="sub-total border text-center mt-2">
                <p class="font-size-12 font-montagu text-success py-3">
                  <i class="fas fa-check"></i> Your order is eligible for free
                  delivery
                </p>
                <div class="border-top py-5">
                  <h6 class="font-montagu font-size-20">Sub Total (<?php echo count($sub_total) ?? 0; ?> items) &nbsp; 
                    <span class="text-danger">$<span class="text-danger" id="deal-price"> 
                      <?php echo isset($sub_total) ? $Cart->getSum($sub_total) : 0; ?>
                    </span>
                  </span>
                  </h6>
                  <button
                    type="submit"
                    class="btn btn-warning mt-3 font-montagu"
                  >
                    Proceed to Buy
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>