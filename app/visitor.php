<?php

namespace App;

class Visitor{

    public string $name;
    public int $age;
    public array $hours;


    public function visit(){
        print_r("i'm visiting");
    }

}
