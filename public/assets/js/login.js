$(document).ready(function () {


    $("#login-form").on("submit", function(e) {
        e.preventDefault();
        var formData = {
            username: $("#username").val(),
            password: $("#password").val(), 
        };
        $.ajax({
            type: "POST",
            url: "http://localhost:3000/server/api/login.php",
            data: formData,
            success: function (response) {
                alert(response);
                // Save the token in the local storage
                localStorage.setItem('userToken', response.token);
            },
            error: function (response) {
                alert('Error: ' + response);
            }
        });
    });

});