

$(function (){
    /* Sorting */
    $('.sortForm').on('change', function(){
        //$(this).val() текушее значение из option
        $(this).parents('form').submit();
    });
});
