<?php
function seach1_elem_arr($arr1,$elem)
{   
    $i=0;
    foreach ($arr1 as $elem_arr1) {
        if ($elem_arr1 == $elem) {
        echo "The array have element ";
        $i++;
        break;
        }
    }
    if ($i==0) {
        echo "The array doesn't have element ";
    }
}
function seach2_elem_arr($arr1,$elem)
{   
    if (in_array($elem, $arr1)) {
        echo "The array have element ";
    }
    else {
        echo "The array doesn't have element ";
    }
}

$arrA = array(-1,1,2,3,3,4,5,6,6,-1,7,8,9);
$elem =0;
seach1_elem_arr($arrA,$elem);
seach2_elem_arr($arrA,$elem);
?>