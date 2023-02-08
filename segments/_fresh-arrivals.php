<!--Fresh Arrivals start-->
<?php
    $fresh = $fetcher->getData("fresharrival");

    //request post
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(isset($_POST['fresh-arrival-submit']))
        {
            $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
        }
    }
?>
<section id="fresh-arrivals">
    <div class="container">
        <h4 class="font-rubik font-size-20 ">Fresh Arrivals</h4>
        <hr>
        <!--slider start-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($fresh as $item){ ?>
            <div class="item py-2 bg-light">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/noimg.png";?>" alt="product1"
                                     class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? "Unknown";?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star-half-alt"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>₹<?php echo $item['item_price'] ?? '0'; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 101;?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <?php
                            if(in_array($item['item_id'],$Cart->getCartid($fetcher->getData('cart')) ?? []))
                            {
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">Added in Cart</button>';
                            }
                            else
                            {
                                echo '<button type="submit" name = "top-offer-submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--slider end-->
    </div>
</section>
<!--Fresh Arrivals end-->
