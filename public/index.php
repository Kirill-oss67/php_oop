<?php

use App\Developer;


require_once '../vendor/autoload.php';
$developer = new Developer('Kirill', 28, [8, 8, 8]);
$developer->setPosition('great developer');
$position = $developer->getPosition();
echo $position;

