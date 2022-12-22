<?php

namespace App;

class Salary{                               // статический класс
    static public int $total;
    static public function count(array $hours): int  // статический метод
    {
        self::$total = array_sum($hours);
        return self::$total * 2000;
    }
}
