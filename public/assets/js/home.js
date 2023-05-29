$(document).ready(function () {

    // Fetch all ... on page load
    fetchUserCompanies(user_id);
    fetchMails();
    fetchUserInteractions(user_id);

    $("#company-form").on("submit", function (e) {
        e.preventDefault();

        var formData = {
            company_name: $("#company_name").val(),
            city: $("#city").val(),
            sector: $("#sector").val(),
            email: $("#email").val(),
            creation_date: $("#creation_date").val(),
            user_id: $("#user_id").val(),
        };

        $.ajax({
            type: "POST",
            url: "http://localhost:3000/server/api/company.php",
            data: formData,
            success: function (response) {
                alert(response);
            },
            error: function (response) {
                alert('Error: ' + response);
            }
        });
    });


    function fetchUserCompanies(user_id) {
        $.ajax({
            type: "GET",
            url: "http://localhost:3000/server/api/company.php?user_id=" + user_id,
            success: function (response) {
                var companies = JSON.parse(response);
                // Here you can update the DOM with the fetched contacts
                // For instance, if you have a table to list the contacts
                var companiesList = '';
                $.each(companies, function (index, company) {
                    companiesList += '<tr><td>' + company.company_name + '</td><td>' + company.city + '</td><td>' + company.email + '</td><td>' + company.sector + '</td><td>' + company.creation_date + `</td><td><button class="action-button" data-company-id="${company.id}">🔍</button></td></tr>`;
                });
                $('#company-table tbody').html(companiesList);

                // Attach click event here
                $('.action-button').click(function () {
                    var companyId = $(this).attr('data-company-id');
                    $('#myModal #send-mail-button').attr('href',"/public/send-mail?company_id=" + companyId);
                    $('#myModal #see-interaction-button').attr('href',"/public/see-interaction?company_id=" + companyId);

                    $('#myModal').show();
                });
            },
            error: function (response) {
                alert('Error: ' + response);
            }
        });
    };

    function fetchMails() {
        $.ajax({
            type: "GET",
            url: "http://localhost:3000/server/api/mail.php",
            success: function (response) {
                var mails = JSON.parse(response);
                // Here you can update the DOM with the fetched contacts
                // For instance, if you have a table to list the contacts
                var mailsList = '';
                $.each(mails, function (index, mail) {
                    mailsList += '<tr><td>' + mail.mail_type + '</td><td>' + mail.mail_subject + '</td><td>' + mail.mail_content + '</td></tr>';
                });
                $('#mail-table').html(mailsList);
            },
            error: function (response) {
                alert('Error: ' + response);
            }
        });
    };

    function fetchUserInteractions(user_id) {
        $.ajax({
            type: "GET",
            url: "http://localhost:3000/server/api/interaction.php?user_id=" + user_id,
            success: function (response) {
                var interactions = JSON.parse(response);
                // Here you can update the DOM with the fetched contacts
                // For instance, if you have a table to list the contacts
                var interactionsList = '';
                $.each(interactions, function (index, interaction) {
                    interactionsList += '<tr><td>' + interaction.interaction_type + '</td><td>' + interaction.interaction_date + '</td><td>' + interaction.notes + '</td><td>' + interaction.company_id + '</td><td>' + interaction.user_id + '</td></tr>';
                });
                $('#interaction-table').html(interactionsList);
            },
            error: function (response) {
                alert('Error: ' + response);
            }
        });
    };

    // Lorsque l'utilisateur clique sur le bouton, ouvrir le popup
    $('.action-button').click(function () {
        $('#myModal').show();
    });

    // Lorsque l'utilisateur clique sur <span> (x), fermer le popup
    $('.close').click(function () {
        $('#myModal').hide();
    });

    // Lorsque l'utilisateur clique n'importe où hors du popup, fermer celui-ci
    $(window).click(function (event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').hide();
        }
    });

});
