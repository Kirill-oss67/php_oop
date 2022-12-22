<?php

namespace App;

trait HasRest{
    public function rest(){
        print_r($this->getName() . ' has rest');
    }
}




?>