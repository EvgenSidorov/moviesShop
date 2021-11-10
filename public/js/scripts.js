$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    /* Sorting */

    $('.sortForm').on('change', function () {
        //$(this).val() текушее значение из option
        $(this).parents('form').submit();
    });

    /* Slider */

    $("#slider-range").slider({
        range: true,
        min: 9,
        max: 101,
        values: [0, 110],
        slide: function (event, ui) {
            // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            $('.filterForm input[name="price_from"]').val(ui.values[0]);
            $('.filterForm input[name="price_to"]').val(ui.values[1]);
        }
    });
    $("#slider2-range").slider({
        range: true,
        min: 0,
        max: 10,
        values: [0, 10],
        slide: function (event, ui) {
            // $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            $('.filterForm input[name="rating_from"]').val(ui.values[0]);
            $('.filterForm input[name="rating_to"]').val(ui.values[1]);
        }

    });

    $('.plus').on('click', function (e) {
        e.preventDefault();
        let href = $(this).attr('href');
        $.post(href, {}, function (response) {
            top.location.reload();
        })

    });

    $('.minus').on('click', function (e) {
        e.preventDefault();
        let href = $(this).attr('href');
        $.get(href, function (response) {
            top.location.reload();
        })

        // let count = $(this).parent().find('.count'),
        //     price = $(this).parent().parent().find('.moviePrice'),
        //     newCount = count.text() - 1;
        // console.log(count, price);
        // if(count == 1) return 1;
        // count.html(newCount);
        // $(this).parent().parent().parent().find('.countTotal').html(newCount * price.text());

    });

    $('.addToBasket').on('click', function (e) {
        e.preventDefault();
        let href = $(this).attr('href');
        $.post(href, {}, function (response) {
            $('#navbarSupportedContent .cartBtn .badge').text(response.countBasket);
        })

    });

});
