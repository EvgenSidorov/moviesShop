

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

    // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    //     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
