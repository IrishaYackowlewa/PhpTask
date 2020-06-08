<?php

function declension($num) {
    $number = $num%100;
    if ((($number==1)||($number%10==1))&&($number!=11)) {
        echo $num." новость\n";
    }
    else if ((($number%10==2)||($number%10==3)||($number%10==4))&&($number!=12)&&($number!=13)&&($number!=14)) {
        echo $num." новости\n";
    }
    else {
        echo $num." новостей\n";
    }
    
}


$nov = 40911492;
declension($nov);

$novo = 0;
declension($novo);

$novos = 1;
declension($novos);

$n = 3;
declension($n);

$no = 11;
declension($no);

$novost = 12;
declension($novost);

$novoste = 26;
declension($novoste);

$novostey = 2601;
declension($novostey);

?>