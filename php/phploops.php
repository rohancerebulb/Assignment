<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP LOOPS</title>
    </head>
    <body>
        <?php
            // while loop
            echo "While loop<br/>";
            $i=0;
            while($i<5){
                echo "The number is ".$i."<br/>";
                $i++;
            }
            // do while loop
            echo "<br/>Do while loop<br/>";
            $i=0;
            do{
                echo "The number is ".$i."<br/>";
                $i++;
            }while($i<=6);
            // for loop
            echo "<br/>For loop<br/>";
            for($i=0;$i<5;$i++){
                for($j=5;$j>$i;$j--){
                    echo "&nbsp;&nbsp;";
                }
                for($k=0;$k<=$i+$i;$k++){
                    echo "*";
                }
                echo "<br/>";
            }
            // foreach loop
            echo "<br/>Foreach loop<br/>";
            $namearray=array("Rohan","Meet","Meet");
            $keyvaluearray=array("a"=>"Rohan","b"=>"Meet","c"=>"Meet");
            foreach($namearray as $value){
                echo $value."<br/>";
            }
            foreach($keyvaluearray as $key=>$value){
                echo $key."=>".$value."<br/>";
            }
            $obj = [43,5,24,64,7,2];
            print_r($obj);
            echo "<br/>";
            foreach($obj as $value){
                if($value%2==0){
                    echo $value."<br/>";
                }
            }
        ?>
    </body>
</html>