<!--Product Display start-->
<?php
    $item_id = $_GET['item_id'] ?? 101;

    //request post
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(isset($_POST['product-display-submit']))
        {
            $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
        }
    }

    foreach ($fetcher->getData("allproduct") as $item):
        if($item['item_id'] == $item_id):
?>
<section class="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/noimg.png";?>" alt="product-img" class="img-fluid">
                <div class="form-row py-4 font-size-16 font-baloo">
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 101;?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <?php
                            if(in_array($item['item_id'],$Cart->getCartid($fetcher->getData('cart')) ?? []))
                            {
                                echo '<button type="submit" disabled class="btn btn-success form-control"><i
                                class="fas fa-shopping-cart"></i>ADDED IN CART</button>';
                            }
                            else
                            {
                                echo '<button type="submit" name="product-display-submit" class="btn btn-warning form-control"><i
                                class="fas fa-shopping-cart"></i>ADD TO CART</button>';
                            }
                            ?>
                        </form>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control"><i class="fas fa-bolt"></i>
                            BUY NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>Visit the <?php echo $item['type'] ?? "Category"; ?> section</small>

                <!-- product Rating start -->
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">5,260 ratings | 357 answered questions</a>
                </div>
                <hr class="m-0">
                <!-- product Rating end -->

                <!--product price start-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>???<?php echo $item['item_price'] + 1000; ?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">???<span><?php echo $item['item_price'] ?? 0; ?></span><small
                                class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td>???<span class="font-size-16 text-danger">1000</span></td>
                    </tr>
                </table>
                <!--product price end-->


                <!--Feature start-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-exchange-alt border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">MyBazaar <br>Delivered</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!--Feature end-->
                <hr>

                <!-- order-details start -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Feb 10 - Feb 12</small>
                    <small>Sold by <a href="#"> Appario Retail Private Ltd&nbsp;</a>(4.5 out of 5 | 18,198
                        ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -
                        751019</small>
                </div>
                <!--order-details end-->

                <div class="row">
                    <div class="col-6">
                        <!--Product color start-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!--Product color end-->
                    </div>
                    <div class="col-6">
                        <!-- product quantity section start -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i
                                        class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light"
                                       disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i
                                        class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!--product quantity section end -->
                    </div>
                </div>
            </div>

            <!-- Product Details start -->
            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit,
                    delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium
                    eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus,
                    accusantium velit numquam a aliquam vitae vel?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit,
                    delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium
                    eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus,
                    accusantium velit numquam a aliquam vitae vel?</p>
            </div>
            <!-- Product Details end-->
        </div>
    </div>
</section>
<!--Product Display end-->
<?php

    endif;
    endforeach;
    ?>