$(document).ready(function() {

    // Lorsque l'utilisateur clique sur le bouton, ouvrir le popup
    $('.more-button2').click(function() {
        console.log("flag 1")
        $('#myModal').show();
    });

    // Lorsque l'utilisateur clique sur <span> (x), fermer le popup
    $('.close').click(function() {
        $('#myModal').hide();
    });

    // Lorsque l'utilisateur clique n'importe où hors du popup, fermer celui-ci
    $(window).click(function(event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').hide();
        }
    });
});