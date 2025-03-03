<?php
namespace MagicConstant;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Magic Constant</title>
    </head>
    <body>
        <?php
            // Magic Constants
            echo "This is line number ".__LINE__."<br/>";
            echo "This is file name ".__FILE__."<br/>";
            echo "This is directory ".__DIR__."<br/>";
            function fun(){
                echo "This is function name ".__FUNCTION__."<br/>";
            }
            fun();
            class Car{
                public function carname(){
                    echo "This is class name ".__CLASS__."<br/>";
                }
            }
            $obj=new Car();
            $obj->carname();
            class Myclass{
                public function methodname(){
                    echo "This is method name ".__METHOD__."<br/>";
                }
            }
            $obj=new Myclass();
            $obj->methodname();
            echo "This is namespace name ".__NAMESPACE__."<br/>";
        ?>
    </body>
</html>