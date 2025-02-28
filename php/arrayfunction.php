<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP ARRAY FUNCTIONS</title>
    </head>
    <body>
        <?php 
            $a=array("Rohan","Meet","Meet");
            $a2=array("PHP","Python","HTML");
            $b=array(5,10,3);
            $aa=array("a"=>"Rohan","b"=>"Parikh");
            $colors=array("o"=>"orange","r"=>"red");
            $cars=array("model"=>array("type"=>"sport","name"=>"honda"));
            $arr1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            $arr2=array("a"=>"red","b"=>"green","c"=>"bluee");
            print_r($a);
            echo "<br/>";
            print_r($b);
            echo "<br/>";
            print_r($aa);
            echo "<br/>";
            print_r($colors);
            echo "<br/>";
            print_r($cars);
            echo "<br/>";
            echo "<br/>";
            // split an array in the given number in parameter
            print_r(array_chunk($a,1));
            echo "<br/>";
            print_r(array_combine($a,$a2));
            echo "<br/>";
            // in count_value if in $a array rohan comes only one time then returns a and if meet comes 2 times than returns meet => 2
            print_r(array_count_values($a));
            echo "<br/>";
            // This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc
            print_r(array_diff($aa,$colors));
            echo "<br/>";
            // Compare the keys and values of two arrays, and return the differences
            print_r(array_diff_assoc($arr1,$arr2));
            echo "<br/>";
            // compare only keys
            print_r(array_diff_key($arr1,$arr2));
            echo "<br/>";
            print_r(array_diff_ukey($arr1,$arr2,"ukeyfun"));
            echo "<br/>";
            print_r(array_fill(0,5,"NAME"));
            echo "<br/>";
            print_r(array_flip($aa));
            echo "<br/>";
            print_r(array_intersect($arr1,$arr2));
            echo "<br/>";
            print_r(array_intersect_assoc($arr1,$arr2));
            echo "<br/>";
            print_r(array_intersect_key($arr1,$arr2));
            echo "<br/>";
            print_r(array_intersect_ukey($arr1,$arr2,"ukeyfun"));
            echo "<br/>";
            print_r(array_key_exists("a",$arr1));
            echo "<br/>";
            print_r(array_keys($arr1));
            echo "<br/>";
            // print_r(array_map("myfun",$a));
            echo "<br/>";
            print_r(array_merge($a,$a2));
            echo "<br/>";
            print_r(array_merge_recursive($a,$a2));
            echo "<br/>";
            print_r(array_multisort($a,$b));
            echo "<br/>";
            print_r(array_pad($a,5,"pad"));
            echo "<br/>";
            print_r(array_pop($a));
            echo "<br/>";
            print_r(array_product($b));
            echo "<br/>";
            print_r(array_push($a,"push"));
            echo "<br/>";
            print_r(array_rand($a));
            echo "<br/>";
            // print_r(array_reduce($b,"reducefun"));
            echo "<br/>";
            print_r(array_replace($a,$a2));
            echo "<br/>";



            function ukeyfun($a,$b){
                if($a===$b)
                    return 0;    
                return ($a>$b)?1:-1;
            }
        ?>
    </body>
</html>