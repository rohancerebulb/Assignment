<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>ID Chech in JQuery</title>
</head>
<body>
    <input type="text" id="id" placeholder="Check ID">
    <button class="bt">Check</button>  
    <br>
    <h1 class="message"> </h1>  
</body>
<script>
$(document).ready(function()
{
    $(".bt").click(function()
    {
        var idcheck = $("#id").val().trim();
        var arr = ['101','102','103'];
        if($.inArray(idcheck, arr) !== -1)
        {
            $(".message").html("Yes");
        }
        else
        {
            $(".message").html("No");
        }
    });
});
</script>
</html>