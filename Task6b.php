<?php

$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
$max=10;
$size=StrLen($chars)-1;
$password=null;
while($max--)
$password.=$chars[rand(0,$size)];

echo $password;
?>