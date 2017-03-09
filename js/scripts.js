function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);


//* MODAL**//
$('#BOUTON').click(function () {
    $('#MERCI').modal('show');
});

//**SMOOTH SCROLL**//
$('.js-scrollTo').on('click', function () { // Au clic sur un élément
    var page = $(this).attr('href'); // Page cible
    var speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate({scrollTop: $(page).offset().top}, speed); // Go
    return false;
});