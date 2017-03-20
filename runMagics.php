<?php
/**
 * Created by PhpStorm.
 * User: pyshke
 * Date: 3/19/2017
 * Time: 7:59 PM
 */
require_once ("AllMagics.php");
require_once ("AllMagics2.php");

//constructor
$vardas = new AllMagics(16, "Petras");
$vardas->getAge();
echo "<br>";

//get
echo "2.Get: ".$vardas->name."<br>";

//set
$vardas->adresas = "Kaunas";
echo "3.Set: ".$vardas->adresas."<br>";

//isset
isset($vardas->pavarde);
echo "<br>";

//call
$vardas->naujaFunkcija();
echo "<br>";

//callstatic
$vardas::statineFunkcija();
echo "<br>";

//toString
echo $vardas;
echo "<br>";

//clone
$vardas2 = clone $vardas;
echo "8.Clone: Vardas prieš klonavimą ".$vardas->name;
echo "<br>";
echo "Vardas po klonavimo ".$vardas2->name;
echo "<br><hr> 9.Sleep and 10.Wakeup<br>";

//sleep
$dom = serialize($vardas);
echo $dom;
echo "<br>";

//wakeup
var_dump(unserialize($dom));


//invoke (keliam amziu kvadratu)
echo "11. Invoke: ".$vardas();
echo "<br>";

//unset
unset($vardas2->name);
echo "<br>";

//debuginfo
echo "13.DebugingInfo: ";
var_dump($vardas);
echo "<br>";

//destruct
echo "14.Destruct: ";
unset($vardas);
echo "<hr>";

//set_state
echo "15. Set_state: ";
$obj = new AllMagics2();
$obj->kint = 'reiksme';
var_export($obj);

