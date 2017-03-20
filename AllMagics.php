<?php

/**
 * Created by PhpStorm.
 * User: pyshke
 * Date: 3/19/2017
 * Time: 7:59 PM
 */
class AllMagics
{

    private $age;
    private $name;

    //constructor
    public function __construct($age, $name) {
        $this->age = $age;
        $this->name = $name;
    }

    public function getAge() {
        echo "1.Construct: amzius ".$this->age;
    }

    //destructor
    public function __destruct() {
        echo "Destructor ijungtas<br>";
    }

    //__get
    public function __get($name) {

        if(property_exists($this, $name)) {
            return $this->$name;
        }
    }

    //__Set
    public function __set($property, $value) {

        $this->$property = $value;
    }

    //__isset
    public function __isset($name) {

        echo "4.Isset: neegzistuoja parametras '$name'";
    }

    //_unset
    public function __unset($name) {

        echo "12.Unset: unsetinam parametrą '$name'";
    }

    //__call
    public function __call($name, $arguments) {

        echo "5.Call: '".$name."' funkcija neegzistuoja.";
    }

    //__callStatic
    public static function __callStatic($name, $arguments) {

        echo "6.StaticFuncion: '".$name."' statinė funkcija neegzistuoja.";
    }

    //__toString
    public function __toString() {

        return "7.ToString: Žmogaus vardas ".$this->name." ir jo amžius yra ". $this->age;
    }

    //__clone
    public function __clone() {
        $this->name = "Kitas žmogus";
    }

    //__sleep
    public function __sleep() {
        return array("name");
    }

    //__wakeup
    public function __wakeup() {
        if($this->name == "Petras") {
            $this->age = 16;
        }
    }

    //invoke
    public function __invoke() {
        return $this->age ** 2;
    }

    //debug
    public function __debugInfo()
    {
        return array("AllMagics turi debuginimo informacijos");
    }


}