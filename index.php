<?php

class Man{
     public $hair = 'brown';
     public $body = 'normal';
public function eat($calories){
    if($calories > 500){
        $this->body = 'fat';
    }else $this->body = 'slim';
}

}

$marina = new Man();

$kirill = new Man();

echo 'Hair of marina ' . $marina->hair . '<br>';
echo 'Hair of kirill ' . $kirill->hair . '<br>';

$marina->hair = 'blond';
echo 'Hair of marina ' . $marina->hair . '<br>';

$marina->eat(200);
$kirill->eat(2000);
echo 'body of marina ' . $marina->body . '<br>';
echo 'body of kirill ' . $kirill->body . '<br>';

?>

