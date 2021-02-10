<?php


namespace koans;


use function PHPUnit\Framework\assertEquals;

class Variable
{
    public function __construct() {

    }
    public function declareAnInt() {
        $intVariable = 1;
        return $intVariable;
    }

    public function declareABoolean() {
        $booleanVariable = true;
        return $booleanVariable;
    }

    public function declareAnFloat () {
        $floatVariable = 0.5;
        return $floatVariable;
    }

    public function declareAnArray() {
        $array = [
            0 => 3,
            1 => 8,
            2 => 5
        ];
        return $array;
    }

    public function declareANullInt() {
        $intVariable = null;
        return $intVariable;
    }

    public function castStringIntToBoolean($var) {
        return (String) ((Int)$var);
    }


}