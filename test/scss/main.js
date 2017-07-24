$(function () {


    $('.Demo__footer').hide();
    $(".Demo__toggle-btn").click(function () {
        $('.Demo__toggle-btn--active').not($(this)).removeClass('Demo__toggle-btn--active')
        $(this).toggleClass('Demo__toggle-btn--active');
        var footer = $(this).next(".Demo__footer");
        $('.Demo__footer--active').not(footer).slideUp();
        $('.Demo__footer--active').not(footer).removeClass('Demo__footer--active');
        footer.toggleClass('Demo__footer--active');
        footer.slideToggle("200");
    });


});