<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP ARRAY FUNCTIONS</title>
    </head>
    <body>
        <?php 
            echo "This is array for the examples.<br/>";
            $namearray=array("Rohan","Meet","Meet");
            $domainarray=array("PHP","Python","HTML");
            $numberarray=array(5,10,3);
            $namewithkey=array("a"=>"Rohan","b"=>"Parikh");
            $colors=array("o"=>"orange","r"=>"red");
            $cars=array("model"=>array("type"=>"sport","name"=>"honda"));
            $keywithcolorsarray=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            $keywithcolorsarray2=array("a"=>"red","b"=>"green","c"=>"bluee");
            printData($namearray);
            printData($domainarray);
            printData($numberarray);
            printData($namewithkey);
            printData($colors);
            printData($cars);
            echo "<br/>";
            // split an array in the given number in parameter
            printData(array_chunk($namearray,1));
            printData(array_combine($namearray,$domainarray));
            // in count_value if in $namearray array rohan comes only one time then returns a and if meet comes 2 times than returns meet => 2
            printData(array_count_values($namearray));
            // This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc
            printData(array_diff($namewithkey,$colors));
            // Compare the keys and values of two arrays, and return the differences
            printData(array_diff_assoc($keywithcolorsarray,$keywithcolorsarray2));
            // compare only keys
            printData(array_diff_key($keywithcolorsarray,$keywithcolorsarray2));
            // compare only keys and values
            printData(array_diff_ukey($keywithcolorsarray,$keywithcolorsarray2,"ukeyfun"));
            printData(array_fill(0,5,"NAME"));
            printData(array_fill_keys($namearray,"NAME"));
            printData(array_flip($namewithkey));
            printData(array_intersect($keywithcolorsarray,$keywithcolorsarray2));
            printData(array_intersect_assoc($keywithcolorsarray,$keywithcolorsarray2));
            printData(array_intersect_key($keywithcolorsarray,$keywithcolorsarray2));
            printData(array_intersect_ukey($keywithcolorsarray,$keywithcolorsarray2,"ukeyfun"));
            printData(array_key_exists("a",$keywithcolorsarray));
            printData(array_keys($keywithcolorsarray));
            printData(array_merge($namearray,$domainarray));
            printData(array_merge_recursive($namearray,$domainarray));
            printData(array_multisort($namearray,$numberarray));
            printData(array_pad($namearray,5,"pad"));
            printData(array_pop($namearray));
            printData(array_product($numberarray));
            printData(array_push($namearray,"push"));
            printData(array_rand($namearray));
            printData(array_replace($namearray,$domainarray));
            printData(array_replace_recursive($namearray,$domainarray));
            printData(array_reverse($namearray));
            printData(array_search("Meet",$namearray));
            printData(array_shift($namearray));
            printData(array_slice($namearray,1));
            printData(array_sum($numberarray));
            printData(array_udiff($keywithcolorsarray,$keywithcolorsarray2,"ukeyfun"));
            printData(array_udiff_assoc($keywithcolorsarray,$keywithcolorsarray2,"ukeyfun"));
            printData(array_udiff_uassoc($keywithcolorsarray,$keywithcolorsarray2,"ukeyfun","ukeyfun"));
            printData(array_unique($namearray));
            printData(array_values($namewithkey));
            printData(array_key_first($namewithkey));
            printData(array_key_last($namewithkey));
            printData(array_walk($domainarray,"walkfun"));
            function walkfun($value,$key){
                echo "$key => $value<br/>";
            }
            function ukeyfun($namearray,$numberarray){
                if($namearray===$numberarray)
                    return 0;    
                return ($namearray>$numberarray)?1:-1;
            }
            function printData($functionData){
                print_r($functionData);
                echo "<br/>";
            }
        ?>
    </body>
</html>