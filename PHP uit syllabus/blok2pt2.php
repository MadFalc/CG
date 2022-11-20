<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blok 2 part 2!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/heart icon.gif" type="image/gif">
    <!--Kijk Tomi, als je hem opent in Firefox, dan pulseert het hartje!-->
</head>

<body>
    <div class="mark">
        <h1>YES</h1>
    </div>
    <div class="top" id=top style="margin-top:30px;">
        wajo dit is top.
    </div>
    <ul class="menu" id=menu>
        <li><a href="index.php">Home</a></li>
        <li><a href="blok1.php">Blok 1</a></li>
        <li><a href="blok2pt1.php">Blok 2 (1/2)</a></li>
        <li><a href="blok2pt2.php">Blok 2 (2/2)</a></li>
    </ul>

    <div class="main">
        <h1>BLOK 2 - Niveau 2</h1>
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

        ?>
        <br>
    </div>

</body>

</html>