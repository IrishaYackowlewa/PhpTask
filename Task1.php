<?php
function SortArr($arr)
{
    $sortArray = $arr;

    sort($sortArray);
    $result = array_unique($sortArray);
    
    return $result;
}

$arr = array(27,39,1,383,4,0,4);
$newArr = SortArr($arr);

function printArrInStr($arr) {
    foreach($arr as $value)
    {
        echo " $value ";
    }
}
printArrInStr($newArr);
?>