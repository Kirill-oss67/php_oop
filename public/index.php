<?php

use App\Designer;
use App\Developer;
use App\Salary;

require_once '../vendor/autoload.php';
$developer = new Developer('Kirill', 28, [8, 8, 8]);
$designer = new Designer('Marina', 30, [8, 8, 8]);
// $developer->setPosition('great developer');
// $position = $developer->getPosition();
// echo $position; 

// $salary = Salary::count($developer->getHours());

// var_dump(Salary::$total);

// $workers = [$developer, $designer];

// foreach($workers as $worker){
//     $worker->work();
//     echo '<br>';
// }

// $developer = null;
// var_dump((string)$developer);
// var_dump(get_class_methods('App\developer'));
var_dump(method_exists('App\developer', 'work'));