<?php
$array1 = array('s', 'ж','9', 'w', 'ю',  '1');
 
sort($array1, SORT_NUMERIC);

function sort_array($array) {
    sort($array, SORT_NUMERIC);
    print_r ($array);
}

$array2 = array(1, 2, 3, 'а', 'в', 'б', 4, 'a', 'c', 'b');
//sort_array($array2);

print_r($array1);
print_r($array2);
?>