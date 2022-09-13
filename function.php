<?php
    /*function reverse(string $string){
        $reverse=strrev($string);
        return strtoupper($reverse);
    }
    echo reverse("hello");*/

    /*function product(int $a,int $b,int $c){
        return $a*$b*$c;
    }
    echo product(2,3,5);*/

   /* function printarray(array $array){
        foreach($array as $item){
            echo $item . "<br>";
        }
    }
    printarray([1,2,3,4,5]);*/

    /*function arrayOperations(array $array) {
        $sum = 0;
        $product = 1;
        $diff = 0;

        foreach($array as $item) {
            $sum += $item;
            $product *= $item;
            $diff -= $item;
        }

        echo sprintf('The sum is %s <br/>', $sum);
        echo sprintf('The product is %s <br/>', $product);
        echo sprintf('The difference is %s <br/>', $diff);
    }

    arrayOperations([2,3,4,5,6]);*/
    echo "<pre>";
    function nameEndswithCharacter(array $names, $lastChar){
        $temporaryarray=[];
        foreach($names as $name){
            $lengthofName=strlen($name);
            $lastIndex=$lengthofName-1;
            $lastCharacter=$name[$lastIndex];

            if($lastCharacter == $lastChar) {
                $temporaryarray[] = $name;
            }
        }

        return $temporaryarray;
    }
    $names = nameEndswithCharacter(['arpan','sushant','manish','prabin','suman'], 't');
    print_r($names);
?>