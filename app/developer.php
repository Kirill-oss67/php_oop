<?php

namespace App;

class Developer extends Worker
{
    use HasRest;

    public function work(){
        print_r('im developing');
    }

    public function __toString()                       //магический метод как в питоне(__str__) 
    {
        return $this->getName();      
    }

    // public function __destruct()
    // {
    //     print_r('some text');
    // }

    public function __call($name, $arguments)
    {
        print_r ("wrong move");
    }
    public function __get($name)
    {
        print'111';
    }


}



?>