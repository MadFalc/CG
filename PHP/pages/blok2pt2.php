<?php
include(__DIR__ . '/../bootstrap.php');
$toptext = "BLOK 2 - Niveau 2";
$titletext = "Blok 2 (2/3)";
include(__DIR__ . '/../_header.php');
?>
<h2>Opdracht 1</h2>
<?php

class MyClass
{
    function __construct()
    {
        echo "MyClass class has been initialized!";
    }
}
$opdracht = new MyClass();
?>

<br>
<h2>Opdracht 2</h2>
<?php
class SimpleClass
{
    var $name;
    function __construct()
    {
        $this->name = "Scott";
        echo "Hello All, I am $this->name";
    }
}
$opdracht2 = new SimpleClass();
?>

<br>
<h2>Opdracht 3</h2>
<?php
class MyCalculator
{
    public $num1;
    public $num2;
    function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    function multiply()
    {
        return $this->num1 * $this->num2;
    }
    function divide()
    {
        return $this->num1 / $this->num2;
    }
    function add()
    {
        return $this->num1 + $this->num2;
    }
    function substract()
    {
        return $this->num1 - $this->num2;
    }
}
$opdracht3 = new MyCalculator(6, 3);
echo $opdracht3->multiply();
echo "<br>";
echo $opdracht3->divide();
echo "<br>";
echo $opdracht3->add();
echo "<br>";
echo $opdracht3->substract();
include(__DIR__ . '/../_footer.php');
?>