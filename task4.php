<?php
$arr = range(1, 20);
foreach ($arr as $elem_arr) {
    echo "$elem_arr ";
}
echo "\n";
shuffle($arr);
foreach ($arr as $elem_arr) {
    echo "$elem_arr ";
}

/*function shuffle_mine($arr){
	$j, $temp;
	for($i = $arr.length - 1; $i > 0; $i--){ //начинаем с конца
        $j = Math.floor(Math.random()*($i + 1)); // случайный элемент правее выбранного элемента
        //меняем местами
		$temp = $arr[j];
		$arr[j] = $arr[i];
		$arr[i] = $temp;
	}
	return $arr;
}*/
?>