$(document).ready(function () {
    sendAjaxRequest("keys",$('#lengthConstants').val());


    $("#toggleButton").click(function () {
        var buttonText = $(this).text();
        $(this).text(buttonText == "display variables" ? "hide variables" : "display variables");
        $("#myVarDiv").toggle();
    });

    $("#sortButton").on("click",function () {
        var buttonText = $(this).val();
        var sort = buttonText === "Sort by values" ? "values" : "keys";
        $(this).val(buttonText === "Sort by values" ? "Sort by keys" : "Sort by values");
        var currentLenght = $('#lengthConstants').val()
        sendAjaxRequest(sort, currentLenght);
    }); 

    $('#lengthConstants').on("change", function(){
        console.log($('#lengthConstants').val());
        var buttonText = $('#sortButton').val();
        var currentSort = buttonText === "Sort by values" ? "keys" : "values";
        var currentLenght = $('#lengthConstants').val();
        sendAjaxRequest(currentSort,currentLenght);
    });



    function sendAjaxRequest(currentSort,currentLenght){
        console.log(currentSort);
        $.ajax({
            type: "POST",
            url: "http://localhost:3000/app/controllers/LearnPhpController.php",
            data: {
                sort: currentSort,
                length: currentLenght,
            },
            success: function(response){
                console.log("AJAX request succeeded");
                // console.log(response);
                var data = JSON.parse(response);
                var constants = data['constants'];
                var len_all_constants = data['len_all_constants'];
                var constantsTable = "";
                $.each(constants,function(key,value){
                    constantsTable += `<tr><td>${key}</td><td>${value}</td></tr>`;
                })
                $("#table-constants tbody").html(constantsTable);  
                $('#numberOfConstantsMsg').html(`</br>The total number of constant is: ${len_all_constants}`)               
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    };

});