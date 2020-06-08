<?php
$array = array('askfnsd', 'bewdsfrsd', 'автрыпвоы', 'юплдподл', '9', '1');

$array2 = array();
$array3 = array();
$array4 = array();
print_r ($array);


for ($i=0; $i<count($array); $i++) {
    if (preg_match('/^[а-яА-Я].*/', $array[$i], $matches, PREG_OFFSET_CAPTURE)) {
        $array2[$i]=$array[$i];
    } 
    if (preg_match('/^[a-zA-Z].*/', $array[$i], $matches, PREG_OFFSET_CAPTURE)) {
        $array3[$i]=$array[$i];
    } 
    if (preg_match('/^[0-9].*/', $array[$i], $matches, PREG_OFFSET_CAPTURE)) {
        $array4[$i]=$array[$i];
    } 
} 

natsort($array2);
natsort($array3);
natsort($array4);

$array5 = $array2+$array3+$array4;
print_r ($array5);

?>
