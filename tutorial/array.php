<?php


/*array*/
$arr =["a","b","c"];

function printarr($a){
    for ($i=0; $i<count($a); $i++){
        echo $a[$i]." " ;
    }
}

echo count($arr).":";

printarr($arr);

echo "<br>" ;

/*push/merge/sort*/
array_push($arr, "d");
printarr($arr);
echo "<br><br>" ;

$arr = array_merge($arr, ['f','g']);
var_dump($arr);
echo "<br><br>" ;

rsort($arr);
printarr($arr);
echo "<br><br>" ;

/*연관배열*/

$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
array_push($grades, array("ants"=>4));

var_dump($grades);
