<?php
    ob_start();
    //header part
    include('header.php');
?>

<?php
    //cart-section
    include('segments/_cart-section.php');

    //top-offer_recently-viewed
    include('segments/_top-offer_recently-viewed.php');
?>

<?php
    //footer part
    include('footer.php');
?>
