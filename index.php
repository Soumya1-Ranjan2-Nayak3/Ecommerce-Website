<?php
    ob_start();
    //header part
    include('header.php');
?>

<?php
    //banner-slider
    include('segments/_banner-slider.php');

    //top-offer_recently-viewed
    include('segments/_top-offer_recently-viewed.php');

    //Products Category
    include('segments/_product-category.php');

    //Promotion
    include('segments/_promotion.php');

    //Fresh Arrivals
    include('segments/_fresh-arrivals.php');
?>

<?php
    //footer part
    include('footer.php');
?>

