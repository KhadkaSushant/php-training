 <?php
    /*$array=[
        2 => 1,
        5 => 2,
        1 => 3,          for ksort,rsort,ksort.
        4 => 4,
        8 => 1
    ];*/
    //$array=[1,2,3,4,5];            for pop,push,sort.
    echo "<pre>";
    // print_r($array);
    // array_push($array,6);
    // print_r($array);
    // $array[]=7;
    // print_r($array);

    // array_pop($array);
    // print_r($array);

    // array_shift($array);
    // print_r($array);

    // sort($array);
    // print_r($array);

    //ksort($array);
    //print_r($array);

    //rsort($array);
    //print_r($array);

    //krsort($array);
    //print_r($array);

    //$array[2]=6;
    //print_r($array);

    //$name = array('sushant'=>'3','suman'=>'8');
   // print_r(array_keys($name));

    //$array=["sushant","manish","suman","arpan"];
    //$callback=function($item){
      //  echo $item . "<br>";
    //};
    //array_map($callback, $array);

   // $names=array_filter(["sushant","manish","suman","arpan"],function($item){
     //   $position=strlen($item)-1;
     //   return $item[$position]=='n';
    //});
    //print_r($names);

    $item=["sushant","manish","suman","arpan"];
    $filterCallback = function($item){
        $position=strlen($item)-1;
        return $item[$position]=='n';
    };
    $mapCallback = function($item){
        return strtoupper($item);
    };
    $reducCallback = function($prev,$item){
        return sprintf("%s,%s",$prev,$item);
    };

    $filteredNames = array_filter($item, $filterCallback);
    $upperCaseNames = array_map($mapCallback, $filteredNames);
    $names = array_reduce($upperCaseNames, $reducCallback, '');

    print_r($names);
?>
