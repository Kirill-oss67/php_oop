<?php 
namespace App;

interface developer_interface extends worker_interface{
    public function work();
    public function rest();
}
