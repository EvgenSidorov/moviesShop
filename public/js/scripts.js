

$(function (){
    /* Sorting */
    $('.sortForm').on('change', function(){
        //$(this).val() текушее значение из option
        $(this).parents('form').submit();
    });

    /* Slider */

    $( "#slider-range" ).slider({
        range: true,
        min: 9,
        max: 101,
        values: [ 0, 110 ],
        slide: function( event, ui ) {
            // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            $('.filterForm input[name="price_from"]').val(ui.values[0]);
            $('.filterForm input[name="price_to"]').val(ui.values[1]);
        }
    });
    $( "#slider2-range" ).slider({
        range: true,
        min: 0,
        max: 10,
        values: [ 0, 10 ],
        slide: function( event, ui ) {
            // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            $('.filterForm input[name="rating_from"]').val(ui.values[0]);
            $('.filterForm input[name="rating_to"]').val(ui.values[1]);
        }

    });



    $('.plus').on('click', function (){
        let count = $('.count').text(),
            price = $('.moviePrice').text(),
            newCount = ++count;
        $('.count').html(newCount);
        $('.countTotal').html(count * price);

    });

    $('.minus').on('click', function (){
        let count = $('.count').text(),
            price = $('.moviePrice').text(),
            newCount = count - 1;
        if(count == 1) return 1;
        $('.count').html(newCount);
        $('.countTotal').html(newCount * price);

    });




    // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    //     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
