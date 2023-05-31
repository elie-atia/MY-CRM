$(document).ready(function () {
    sendAjaxRequest("keys");


    $("#toggleButton").click(function () {
        var buttonText = $(this).text();
        $(this).text(buttonText == "display variables" ? "hide variables" : "display variables");
        $("#myVarDiv").toggle();
    });

    $("#sortButton").click(function () {
        var buttonText = $(this).val();
        $(this).val(buttonText === "Sort by values" ? "Sort by keys" : "Sort by values");
        var sort = buttonText === "Sort by values" ? "values" : "keys";
        sendAjaxRequest(sort);
    });

    function sendAjaxRequest(currentSort){
        $.ajax({
            type: "POST",
            url: "http://localhost:3000/app/controllers/LearnPhpController.php",
            data: {
                sort: currentSort
            },
            success: function(response){
                console.log("AJAX request succeeded");
                $("#constantsDiv").html(response);               
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    };

});