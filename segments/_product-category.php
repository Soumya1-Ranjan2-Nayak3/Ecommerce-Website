<!--Products Category Start-->
<?php
    $allprod = $fetcher->getData("allproduct");
    $category = array_map(function ($pro){return $pro['type'];},$allprod);
    $unique = array_unique($category);
    sort($unique);

    //request post
    if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            if(isset($_POST['product-category-submit']))
            {
                $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
            }
        }

    $in_cart = $Cart->getCartid($fetcher->getData('cart'));
?>
<section id="Product-Category">
    <div class="container">
        <h4 class="font-rubik font-size-20">Product Category</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Products</button>
            <?php
                array_map(function ($category){
                    printf(' <button class="btn" data-filter=".%s">%s</button>',$category,$category);
                },$unique)
            ?>
        </div>
        <div class="grid">
            <?php array_map(function($item) use($in_cart){ ?>
            <div class="grid-item border <?php echo $item['type'] ?? "Category"; ?>">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/noimg.png"; ?>" alt="boat_ear"
                                         class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknnown"; ?></h6>
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
                                if(in_array($item['item_id'],$in_cart ?? []))
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
            </div>
            <?php },$allprod) ?>
        </div>
    </div>
</section>
<!--Products Category end-->
