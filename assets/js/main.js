$(".open-mobile-nav").click(function() {
    const target = $(this).data('target');
    // alert(target);
    $( target ).addClass('show');
});
$(".close-mobile-nav").click(function() {
    const target = $(this).data('target');
    $( target ).removeClass('show');
});
