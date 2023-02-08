$(document).ready(function(){
    //slider
    $("#banner-area .owl-carousel").owlCarousel({
        items:1,
        dots: false,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });

    //top sale
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin:30,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }

        }
    });

    //product filter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    // fliter on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });

    //fresh arrival
    $("#fresh-arrivals .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin:30,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }

        }
    });

    //product quantity section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");

    //quantity up button
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
        //changing the price of the product
        $.ajax({url: "segments/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9)
                {
                    $input.val(function(i,oldval){
                        return ++oldval;
                    });

                    // price multiplication
                    $price.text(parseInt(item_price*$input.val()).toFixed(2));

                    //add in total box
                    let total = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(total.toFixed(2));
                }


            }}); // ajax close



    });


    //quantity down button
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //changing the price of the product
        $.ajax({url: "segments/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10)
                {
                    $input.val(function(i,oldval){
                        return --oldval;
                    });

                    // price multiplication
                    $price.text(parseInt(item_price*$input.val()).toFixed(2));

                    //add in total box
                    let total = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(total.toFixed(2));
                }


            }}); // ajax close


    })
});


