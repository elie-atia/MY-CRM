$(document).ready(function () {

    // Fetch all ... on page load
    fetchMails();
    mailsObject = [];
    
    function fetchMails() {
        $.ajax({
            type: "GET",
            url: "http://localhost:3000/server/api/mail.php",
            success: function (response) {
                var mails = JSON.parse(response);
                mailsObject = mails;
                var mailsList = '';
                // Here you can update the DOM with the fetched contacts
                // For instance, if you have a table to list the contacts
                $.each(mails, function (index, mail) {
                    mailsList += `<option value="${mail.mail_type}" mail-id="${mail.id}">${mail.mail_type}</option>`;
                });
                $('#mail-select').html(mailsList);
                $('#mail-select').value = mails[0].mail_type;
            },
            error: function (response) {
                alert('Error: ' + response);
            }
        });
    };

    $('#mail-select').change(function() {
        var mailId = $(this).find('option:selected').attr('mail-id');
        console.log(mailId)
        $('#email-heading-subject .email-body').html(mailsObject.filter(mail=> mail.id == mailId)[0]?.mail_subject);
        $('.email-body-content').html(mailsObject.filter(mail=> mail.id == mailId)[0]?.mail_content);

    }).change();
});
