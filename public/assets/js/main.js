$(document).ready(function() {

    // Fetch all contacts on page load
    fetchContacts();


    $("#contact-form").on("submit", function(e) {
        e.preventDefault();
        
        var formData = {
            name: $("#name").val(),
            email: $("#email").val(), 
            phone: $("#phone").val(),
            company: $("#company").val()
        };
        
        $.ajax({
            type: "POST",
            url: "http://localhost:3000/server/api/contacts.php",
            data: formData,
            success: function(response) {
                alert(response);
            },
            error: function(response) {
                alert('Error: ' + response);
            }
        });
    });


    function fetchContacts() {
        $.ajax({
            type: "GET",
            url: "http://localhost:3000/server/api/contacts.php",
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
