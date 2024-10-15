<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <form action="">
                <label for="">Country:</label>
                <select name="" id="country">
                    <option value="value">Select Country</option>
                </select>
                <br><br>
                <label for="">State:</label>
                <select name="" id="state">
                    <option value="">Select State</option>
                </select>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            function loadData(type, category_id){
                $.ajax({
                    url : "load-cs.php",
                    type : "POST",
                    data : {type:type,id:category_id},
                    success : function(data){
                        if(type == "stateData"){
                            $("#state").html(data);
                        }else{
                            $("#country").append(data);
                        }
                        // $("#country").append(data);
                    }
                });
            }

            loadData();

            $("#country").on("change",function(){
                var country = $("#country").val();
                if(country != ""){
                    loadData("stateData", country);
                }else{
                    $("#state").html("");
                }
            })
        });

    </script>
</body>
</html>


