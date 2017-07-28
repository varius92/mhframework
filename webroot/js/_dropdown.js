/*
 Selektoren
 .Dropdown__Toggle: Dropdown Trigger
 .Dropdown__Container: Dropdown Target
 */

var Transition_time = 300,
    Transition_type = "swing";

$('.Dropdown').each(function (e) {
    var $this = $(this);
    $(this).first('.Dropdown__Toggle').on('click', function (e) {
        e.stopPropagation();
        if ($this.hasClass('Dropdown--open')) {
            $this.removeClass('Dropdown--open');
            $this.find('.Dropdown--open').removeClass('Dropdown--open');
            $this.find('.Dropdown__Container').slideUp(Transition_time, Transition_type);
        } else {
            $this.addClass('Dropdown--open');
            $this.children('.Dropdown__Container').first().slideDown(Transition_time, Transition_type);
        }
    });
});


// Jeder Klick innerhalb des HTML Dokumentes versteckt den Dropdown-Container
$(document).click(function () {
    $(".Dropdown--open .Dropdown__Container").slideUp();
    $('.Dropdown--open').removeClass('Dropdown--open');
});

// Jeder Klick innerhalb des Dropdown-Container führt nicht zur Ausblendung
$(".Dropdown").click(function (e) {
    e.stopPropagation();
});
