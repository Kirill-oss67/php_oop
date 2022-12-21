<?php

abstract class GrandFather
{
    public $hair = 'brown';
    public $body = 'normal';
    private $nose = 'crooked';
    private $neck = 'long';
    private $soup = 'borch';

    public function eat($calories)
    {
        if ($calories > 500) {
            $this->body = 'fat';
        } else $this->body = 'slim';
    }

    protected function makeSoup()
    {
        return $this->soup;
    }

    protected function showGrandfatherNose()
    {
        return $this->nose;
    }
};

class Man extends GrandFather
{

    protected $eyes = 'blue';

    public function Recolor($color)
    {   //  инкапсуляция
        $this->eyes = $color;
        return $this->eyes;
    }

    public function makeSoup()
    {
        $soup = parent::makeSoup();       // полиморфизм(переопределение(или дополнение) поля или метода родительского класса)
        $soup .= ' is bitter';
        echo $soup;
    }

    public function showGrandfatherNose()
    {
        $nose = parent::showGrandfatherNose();    // полиморфизм(переопределение(или дополнение) поля или метода родительского класса)
        $nose .= ' but a little';
        echo $nose;
    }
}


$marina = new Man();


$eyes = $marina->Recolor('green');
echo $eyes;

$kirill = new Man();



// $kirill->showGrandfatherNose() ;
// echo '<br>';


// $kirill->makeSoup() ;
// echo '<br>'

// echo 'Hair of marina ' . $marina->hair . '<br>';
// echo 'Hair of kirill ' . $kirill->hair . '<br>';

// $marina->hair = 'blond';
// echo 'Hair of marina ' . $marina->hair . '<br>';

// $marina->eat(200);
// $kirill->eat(2000);
// echo 'body of marina ' . $marina->body . '<br>';
// echo 'body of kirill ' . $kirill->body . '<br>';
