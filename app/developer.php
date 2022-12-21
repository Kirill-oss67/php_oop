<?php

namespace App;

class Developer extends Worker{
    public function work(){
        print_r('im developing');
    }
    public function rest(){
        return null;
    }


}



?>