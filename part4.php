<?php
$array = Array ( 
    musical => Array ( 0 => "Oklahoma" , 1 => "The Music Man",2 => "South Pacific" ) ,
    dramas => Array ( 0 => "Lawrence of Arabia" , 1 => "To Kill a Mockingbird",2 => "Casablanca" ) ,
    mysteries => Array ( 0 => "The Maltese Falcon" , 1 => "Rear Window",2 => "North by Northwest" ) );
    $keys = array_keys($array);
    $i=0;
    foreach($array as $a){
        echo strtoupper($keys[$i])."<br>";
        $j =0;
        foreach ($a as $a1){
            echo "----> $j = $a1<br>";
            $j++;
        }
    $i++;
    }
    ksort($array);
?>