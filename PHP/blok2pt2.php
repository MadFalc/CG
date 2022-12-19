<?php
include('C:\xampp\htdocs\opdrachten\CG\PHP\_header.php');
?>
<div class="top" id=top style="margin-top:30px;">
    BLOK 2 - Niveau 2
</div>
<head>
    <title>Block 2 (2/3)</title>
</head>
<?php
include('C:\xampp\htdocs\opdrachten\CG\PHP\_betweener.php');
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
include('C:\xampp\htdocs\opdrachten\CG\PHP\_footer.php');
?>