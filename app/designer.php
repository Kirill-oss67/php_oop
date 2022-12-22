<?php

namespace App;

class Designer extends Worker
{
    use HasRest;

    public function work(){
        print_r('im designing');
    }



}



?>