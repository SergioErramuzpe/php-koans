<?php

namespace Deg540\koans\Test;


use koans\Boolean;
use koans\Variable;
use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

class VariableTest extends TestCase
{
    /**
        * @test
        **/
    public function declaresAInt()
    {
        # Instancia de una nueva variable
        $variable = new Variable();

        # Adquisicion de el entero mediante un método en la variable
        $integerValue = $variable->declareAnInt();

        #Comprobación de que se tiene un entero
        $this->assertIsInt($integerValue);
    }

    /**
    * @test
    **/
    public function declaresABoolean() {

        # Instancia de una nueva variable
        $variable = new Variable();

        # Adquisicion de el entero mediante un método en la variable
        $booleanValue = $variable->declareABoolean();

        #Comprobación de que se tiene un entero
        $this->assertIsBool($booleanValue);

    }

    /**
    * @test
    **/
    public function declaresAFloat()
    {
        $variable = new Variable();

        $floatValue = $variable->declareAnFloat();

        $this->assertIsFloat($floatValue);
    }

    /**
    * @test
    **/
    public function declaresAnArray()
    {
        $variable = new Variable();

        $array = $variable->declareAnArray();

        $this->assertIsArray($array);
    }

    /**
     * @test
     **/
    public function declaresANullInt () {
        $variable = new Variable();

        $nullInt = $variable->declareANullInt();

        $this->assertEquals(null,$nullInt);
    }

    /**
     * @test
     **/
    public function assignsNewVariableValue($var = 2) {
        $variable = new Variable();

        $this->assignNewVariableValue($variable,$var);

        $this->assertEquals($var,$variable);
    }

    /**
     * @test
     **/
    public function castsStringIntToBoolean ($var = true) {
        $variable = new Variable();

        $variable = $variable->castStringIntToBoolean($var);

        $this->assertIsString($variable);
    }


}
