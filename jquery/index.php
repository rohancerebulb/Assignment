<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <input type="text" id="name" name="data" placeholder="Enter your name">
    <button id="submitBtn">Submit</button>
    <p id="response"></p>
    <p id="dd1"></p>

    <script>
        $(document).ready(function(){
            $("#submitBtn").click(function(){
                $("#dd1").text($("input").serialize());
                var name = $("#name").val();
                $.ajax({
                    url: "text.php",
                    type: "POST",
                    data: { name:name },
                    success: function(response){
                        $("#response").html(response);
                    },
                    error: function(xhr, status, error){
                        $("#response").html("Error: " + error);
                    }
                });
            });
        });
    </script>
    <script>
    $(document).ready(function() {
        $(document).ajaxStart(function() {
            $("#loading").show();
        }).ajaxStop(function() {
            $("#loading").hide();
        });

        $("#fetchData").click(function(){
            $.ajax({
                url: "https://jsonplaceholder.typicode.com/posts/1",
                type: "GET",
                success: function(data) {
                    $("#content").text("Data Loaded: " + data.title);
                }
            });
        });
    });
</script>

<button id="fetchData">Fetch Data</button>
<p id="loading" style="display: none;">Loading...</p>
<p id="content"></p>
</body>
</html>