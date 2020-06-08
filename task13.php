<?php

function Sum() {
    $sum=0;
    while (($a=readline('Enter part sum or "done" to complete: '))!='done') {
        if (preg_match('/^(-)?[0-9]+(\.)?[0-9]?$/', $a)) {
            $sum += $a;
        }
        else {
            echo 'Incorrect value. Enter "done" to complete or the correct value to continue adding '."\n";
        }
    }
    return $sum;
}

echo Sum();
?>