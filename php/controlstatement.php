<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Control Statement</title>
    </head>
    <body>
        <?php
            // if else statement
            echo "If else statement<br/>";
            if(5>3){
                echo "5 is greater than 3";
            }
            else{
                echo "5 is not greater than 3";
            }
            echo "<br/>";
            // if elseif else statement
            echo "<br/>If elseif else statement<br/>";
            $a=5;
            $b=5;
            if($a>$b){
                echo "a is greater than b";
            }
            elseif($a==$b){
                echo "a is equal to b";
            }
            else{
                echo "a is less than b";
            }
            echo "<br/>";
            // switch statement
            echo "<br/>Switch statement<br/>";
            $color="red";
            switch($color){
                case "red":
                    echo "Your favorite color is red!";
                    break;
                case "blue":
                    echo "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
            echo "<br/>";
            // continue statement
            echo "<br/>Continue statement<br/>";    
            for($i=0;$i<5;$i++){
                if($i==3){
                    continue;
                }
                echo "The number is ".$i."<br/>";
            }
            // break statement
            echo "<br/>Break statement<br/>";
            for($i=0;$i<5;$i++){
                if($i==3){
                    break;
                }
                echo "The number is ".$i."<br/>";
            }
        ?>
    </body>
</html>