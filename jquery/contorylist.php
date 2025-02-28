<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contory List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

</head>
<body>
    <form id="formofcontorylist">
        <select name="dropdowncontory" id="contorylist"  style="width:400px;">
            <option value="">Select</option>
        </select>
        <!-- <input type="submit" value="Submit"> -->
    </form>
    <p id="demo"></p>
<script>
$(document).ready(function () {
     $("#contorylist").select2({
        placeholder: "Search & Select a Country",
        allowClear: true
    });
    $.ajax({
        url: "https://api.first.org/data/v1/countries",
        // here if we dont mention still work
        // method: "GET",
        // dataType: "json",
        success: function (response) {
            var countries = response.data; 
            $.each(countries, function (key, item) {
                $("#contorylist").append(`<option value="${key}">${item.country}</option>`);
            });
            $("#contorylist").trigger("change");
        },
        error: function () {
            alert("Error");
        }
    });

    $("#contorylist").change(function () {
    var selectedCode = $("#contorylist").val();
    var selectedName = $("#contorylist option:selected").text(); 
    $("#demo").html(`Selected Country: <b>${selectedName}</b><br/> Code: <b>${selectedCode}</b>`);
    });
});


</script>
</body>
</html>