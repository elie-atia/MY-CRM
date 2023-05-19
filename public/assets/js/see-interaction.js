$(document).ready(function() {

    // Lorsque l'utilisateur clique sur le bouton, ouvrir le popup
    $('.more-button').click(function() {
        // Récupérer le texte de la note
        var noteTextTemp = $(this).parent().contents().get(0).nodeValue;
        var noteText = noteTextTemp.split('Note: ')[1].trim();
        // Insérer le texte dans le modal
        $('.modal-text').text(noteText);
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