<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    
    <div class="container-fluid" id="main">
        <div class="container" id="table-date">
            <form id="submit_form">
                <label for="fullname">Name:</label>    
                <input type="text" name="fullname" id="fullname">
                
                <label for="age">Age:</label>    
                <input type="text" name="age" id="age">

                <label>Gender:</label>
                <input type="radio" name="gender" value="male">
                <span>Male</span>
                <input type="radio" name="gender" value="female">
                <span>Female</span>

                <label for="contary">Country:</label>
                <select id="contary" name="contary">
                    <option value="india">India</option>
                    <option value="uk">UK</option>
                    <option value="usa">USA</option>
                    <option value="russia">Russia</option>
                </select>

                <input type="submit" value="Submit" id="submit">
            </form>
            <div id="response" class="response"></div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
    // $(document).ready(function(){
    //     $("#submit_form").on("submit", function(event){
    //         event.preventDefault(); 
    //         var name = $("#fullname").val(); 
    //         var age = $("#age").val(); 

    //         if(name === "" || age === "" || !$('input:radio[name=gender]').is(':checked')){
    //             $('#response').fadeIn();
    //             $('#response').removeClass('success-msg').addClass('error-msg').html('All fields are required');
    //         } else {
    //             $.ajax({
    //                 url: "save-form.php",
    //                 type: "POST",
    //                 data: $(this).serialize(), 
    //                 // not showing error and success message (Loading message)
    //                 beforesend:function(){
    //                     $('#response').fadeIn();
    //                     $('#response').removeClass('success-msg error-msg').addClass('process-msg').html('Loading...');
    //                 }
    //                 success: function(data){
    //                     $('#submit_form').trigger("reset");
    //                     $('#response').fadeIn();
    //                     $('#response').removeClass('error-msg').addClass('success-msg').html(data);
    //                     setTimeout(() => {
    //                         $('#response').fadeOut("slow");
    //                     }, 4000);
    //                 },
    //                 error: function(jqXHR, textStatus, errorThrown) {
    //                     $('#response').fadeIn();
    //                     $('#response').removeClass('success-msg').addClass('error-msg').html('An error occurred: ' + textStatus); //error message
    //                 }
    //             });
    //         }
    //     });
    // });


    $(document).ready(function(){
    $("#submit_form").on("submit", function(event){
        event.preventDefault(); 
        var name = $("#fullname").val(); 
        var age = $("#age").val(); 

        if(name === "" || age === "" || !$('input:radio[name=gender]').is(':checked')){
            $('#response').fadeIn();
            $('#response').removeClass('success-msg').addClass('error-msg').html('All fields are required');
        } else {
            $.ajax({
                url: "save-form.php",
                type: "POST",
                data: $(this).serialize(),
                // beforeSend: function() { // Corrected typo
                //     $('#response').fadeIn();
                //     $('#response').removeClass('success-msg error-msg').addClass('process-msg').html('Loading...');
                // },
                success: function(data){
                    $('#submit_form').trigger("reset");
                    $('#response').fadeIn();
                    $('#response').removeClass('error-msg').addClass('success-msg').html(data);
                    setTimeout(() => {
                        $('#response').fadeOut("slow");
                    }, 4000);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#response').fadeIn();
                    $('#response').removeClass('success-msg').addClass('error-msg').html('An error occurred: ' + textStatus); // Error message
                }
            });
        }
    });
});

</script>



     
</body>
</html>
