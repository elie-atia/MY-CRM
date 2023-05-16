$(document).ready(function() {

    // Fetch all contacts on page load
    // fetchCompanies();


    $("#company-form").on("submit", function(e) {
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
            success: function(response) {
                alert(response);
            },
            error: function(response) {
                alert('Error: ' + response);
            }
        });
    });


    function fetchCompanies() {
        $.ajax({
            type: "GET",
            url: "http://localhost:3000/server/api/company.php",
            success: function(response) {
                var contacts = JSON.parse(response);
                // Here you can update the DOM with the fetched contacts
                // For instance, if you have a table to list the contacts
                var contactList = '';
                $.each(contacts, function(index, contact) {
                    contactList += '<tr><td>' + contact.name + '</td><td>' + contact.email + '</td><td>' + contact.phone + '</td><td>' + contact.company + '</td></tr>';
                });
                $('#contact-table').html(contactList);
            },
            error: function(response) {
                alert('Error: ' + response);
            }
        });
    }

});
