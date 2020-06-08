<?php
function unique_elems__arr($arr1,$arr2)
{    
    $resArr1 = array_diff($arr1, $arr2);
    $resArr2 = array_diff($arr2, $arr1);

    $result = array_unique(array_merge($resArr1, $resArr2));
    foreach($result as $res) {
        echo "$res ";
    }
}

$arrA = array(1,2,3);
$arrB = array(2,3,5);
unique_elems__arr($arrA,$arrB);
?>