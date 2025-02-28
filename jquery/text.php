<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            if($_POST['name']==null)
            {
                echo "emty.";
            }
            else{
                echo "Hello, " . $name . " Welcome.";
            }
        } else {
            echo "No name received.";
        }
    ?>

</body>
</html>