<!--Cart section start-->
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['delete-item']))
        {
            $deleteitem = $Cart->deleteCart($_POST['item_id']);
        }
    }
?>
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- Total shopping cart items start -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($fetcher->getData('cart') as $item):
                        $cart = $fetcher->getProduct($item['item_id']);
                         $total[] = array_map(function ($item){
                ?>
                <!-- cart item start-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image'] ?? "./assets/noimg.png";?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown";?> </h5>

                        <!-- product rating start-->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">10,538 Ratings & 461 Reviews</a>
                        </div>
                        <!--  product rating end-->

                        <!-- product quantity start-->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0';?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id'] ?? '0';?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0';?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-item" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                            </form>

                        </div>
                        <!-- !product quantity end -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            ₹<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0';?>"><?php echo $item['item_price'] ?? 0;?></span>
                        </div>
                    </div>
                </div>
                <!-- cart item end-->
                <?php
                             return $item['item_price'];
                    },$cart); // closing array map

                    endforeach;

                ?>
            </div>
            <!-- count section start-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($total) ? count($total) : 0; ?> item):&nbsp; <span class="text-danger">₹<span class="text-danger" id="deal-price"><?php echo isset($total) ? $Cart->getSum($total) : 0; ?></span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- count section edn-->
        </div>
        <!--  Total shopping cart items end  -->
    </div>
</section>
<!--Cart section end-->
