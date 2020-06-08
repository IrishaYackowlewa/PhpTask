<?php

class Animal
{
    private $age = 0;
    private $lives = 9;

    public function __set($age, $new_age) 
    {
        $this->$age = $new_age;
    }

    public function __get($age) 
    {
        echo "$age = ";
        return $this->$age;
    }
}
class Cat extends Animal
{
}

$aMember = new Cat();
$aMember->age = 2;
$aMember->lives = 3;

echo $aMember->age."\n";
echo $aMember->lives."\n";


?>