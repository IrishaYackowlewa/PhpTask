<?php

function conv_to_Kb($byte) {
    return intdiv($byte,1000);
}

function conv_to_Mb($byte) {
    return intdiv($byte,1000000);
}

function conv_to_Gb($byte) {
    return intdiv($byte,1000000000);
}

function conv_to_Tb($byte) {
    return intdiv($byte,1000000000000);
}

$byt = 40911400065070;

echo conv_to_Kb($byt)." Kb\n";
echo conv_to_Mb($byt)." Mb\n";
echo conv_to_Gb($byt)." Gb\n";
echo conv_to_Tb($byt)." Tb\n";

?>