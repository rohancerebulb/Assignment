<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID</title>
</head>
<body>
    <form action="idchecker.php" method="POST">
        <input type="text" name="id" id="idcheck" placeholder="Check your ID's" required>
        <button>Check</button>
        <!-- <p class="checktheid"></p>
        <p id="result"></p> -->
    </form>

</body>
<?php
    $a=[101,102,103];
    if (isset($_POST['id']))
    {
        $id=$_POST['id'];
        if(in_array($id,$a))
        {
            echo "Yes";
        }
        else
        {
            echo "No";
        }
    }
?>
<script>
// function check()
// {
//     let userID = document.getElementById('idcheck').value;
//     $.ajax({
//         url:"idchecker.php",
//         type:"POST",
//         data:{id:userID},
//         success: function(response) 
//         {
//             if (response.trim() === "Yes") 
//             {
//                 $("#result").html("ID is already taken").css("color", "red");
//             } else {
//                 $("#result").html("ID is available").css("color", "green");
//             }
//         }
//     });
// }
</script>
</html>