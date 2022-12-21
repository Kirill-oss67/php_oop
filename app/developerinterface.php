<?php 
namespace App;

interface Developer_interface extends Worker_interface{
    public function work();
    public function rest();
}
