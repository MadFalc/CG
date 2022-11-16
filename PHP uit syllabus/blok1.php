<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blok 1!</title>
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
        <h1>BLOK 1</h1>

        <?php

        $kangaroo = "Kanga";
        $$kangaroo = "Roo";
        echo "Hi, I'm " . $kangaroo . " and this is " . $Kanga . ".";


        print("<br> PHP Works?");

        echo "<br>LOOP EXERCISES<br>";

        echo "<br>--------Opdracht 1!--------<br>";

        $x = 1;

        while ($x <= 10) {
            echo $x;
            $x++;
            if ($x == 11) {
                break;
            }
            echo "-";
        }


        echo "<br>--------Opdracht 2!--------<br>";
        $sum = 0;

        for ($x = 0; $x < 30; $x++) {
            $sum += $x;
        }

        echo "$sum";


        echo "<br>--------Opdracht 3!--------<br>";
        for ($x = 1; $x <= 5; $x++) {
            for ($y = 1; $y <= $x; $y++) {
                echo "*";
            }
            echo "<br>";
        }


        echo "<br>--------Opdracht 4!--------<br>";
        $ster = array(1, 2, 3, 4, 5, 5, 4, 3, 2, 1);
        foreach ($ster as $value) {
            for ($x = 1; $x <= $value; $x++) {
                echo "*";
            }
            echo "<br>";
        }


        echo "<br>--------Opdracht 5!--------<br>";

        ?>


        <!DOCTYPE html>
        <html>

        <head></head>

        <body>
            <table width="270px" cellspacing="0px" cellpadding="0px" border="15px">
                <!-- cell 270px wide (8 columns x 30px) -->
                <?php
                for ($row = 1; $row <= 8; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= 8; $col++) {
                        $total = $row + $col;
                        if ($total % 2 == 0) {
                            echo "<td height=30px width=30px bgcolor=#FFF>";
                        } elseif ($total + $col % 2 !== 0) {
                            echo "<td height=30px width=30px bgcolor=#000>";
                        }
                    }
                }

                ?>
            </table>
        </body>

        </html>

        <?php
        echo "<br>FUNCTION EXERCISES<br>";

        echo "<br>--------Opdracht 1!--------<br>";
        function checkPrime(int $num)
        {
            echo "<br> The number you privided is: $num. ";
            if ($num >= 0) {
                for ($i = 2; $i <= $num / 2; $i++) {
                    if ($num % $i == 0) {
                        echo " The provided number is not a prime.";
                        return 0;
                    }
                }
                echo " This is a prime number!";
                return 1;
            } else {
                echo " This is not an absolute number. Provide an absolute integer.";
            }


        }
        ;
        checkPrime(15);
        checkPrime(-12);
        checkPrime(4);
        checkPrime(7);
        checkPrime(-1);
        checkPrime(19);
        checkPrime(9);
        checkPrime(347);


        echo "<br>--------Opdracht 2!--------<br>";
        function revString(string $str)
        {
            $length = strlen($str);
            for ($i = $length - 1; $i >= 0; $i--) {
                echo $str[$i];
            }

        }

        revString("Whaddup partypeople. omgedraaid is diaardegmo");


        echo "<br>--------Opdracht 3!--------<br>";
        function checkLowerCase($str)
        {
            for ($i = 0; $i < strlen($str); $i++) {
                if (
                    ord($str[$i]) >= ord('A') &&
                    ord($str[$i]) <= ord('Z')
                ) {
                    return false;
                }
            }
            return true;
        }

        var_dump(checkLowerCase('dit is een string zonder hoofdletters'));
        echo "<br>";
        var_dump(checkLowerCase('dit is een string ZONDER hoofdletters'));
        echo "<br>";


        echo "<br>--------Opdracht 4!--------<br>";
        function sortMyArray($a)
        {
            for ($i = 0; $i < count($a); $i++) {
                $min = $i;
                for ($j = $i + 1; $j < count($a); $j++) {
                    if ($a[$j] < $a[$min]) {
                        $temp = $a[$min];
                        $a[$min] = $a[$j];
                        $a[$j] = $temp;
                    }
                }
            }
            return $a;
        }

        $a = array(22, 11, 'ZZ', 'hallo', 33, 'zz', 100, 'wut', 2, 'abc', 'ABC');
        print_r(sortMyArray($a));
        echo "<br>--------Opdracht 5!--------<br>";
        ?>



        <form method="post" action="">
            <label for="post">Name: </label>
            <input type="text" name="value1">
            <label for="post">Age: </label>
            <input type="text" name="value2">
            <input type="submit"><br>
        </form>

        <?php
        function ageToVote()
        {
            if (isset($_POST['value1']) and isset($_POST['value2'])) {
                echo "You provided name: " . $_POST['value1'] . "<br>";
                echo "You provided age: " . $_POST['value2'] . "<br>";
            } else {
            }

            if ($_POST['value2'] <= '17') {
                echo $_POST['value1'] . " is too young to vote (" . $_POST['value2'] . "). Git outaa heere. <br> De stemgrens is 18 jaar. Wordt snel ouder om te stemmen. <br>";
                return;
            } else {
                echo $_POST['value1'] . " can vote. They are old enough (" . $_POST['value2'] . "). Let's go. <br>";
                return;
            }
        }
        ageToVote();

        echo "<br>ARRAY EXERCISES<br>";
        echo "<br>--------Opdracht 1!--------<br>";

        $color = array('white', 'green', 'red', 'blue', 'black');

        echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $color[2] . " carpet, the " . $color[1] . " lawn, the " . $color[0] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon<br>";

        echo "<br>--------Opdracht 2!--------<br>";
        $color = array('white', 'green', 'red');
        echo "<ul>";
        echo "<li>" . $color[1] . "</li>";
        echo "<li>" . $color[2] . "</li>";
        echo "<li>" . $color[0] . "</li>";
        echo "</ul>";

        echo "<br>--------Opdracht 3!--------<br>";
        $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
        asort($ceu);

        foreach ($ceu as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value . "<br>";
        }

        echo "<br>--------Opdracht 4!--------<br>";
        $recTemp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);
        $filtTemp = array_filter($recTemp);
        $average = array_sum($filtTemp) / count($filtTemp);
        echo "Average Temperature is: " . $average . "<br>";
        sort($filtTemp);
        echo "List of five lowest temperatures: " . $filtTemp[0] . ", " . $filtTemp[1] . ", " . $filtTemp[2] . ", " . $filtTemp[3] . ", " . $filtTemp[4] . "<br>";
        rsort($filtTemp);
        echo "List of five highest temperatures: " . $filtTemp[0] . ", " . $filtTemp[1] . ", " . $filtTemp[2] . ", " . $filtTemp[3] . ", " . $filtTemp[4] . "<br>";


        echo "<br>--------Opdracht 5!--------<br>";
        $weeklyTemps = [
            "Maandag" => [
                "Groningen" => 25,
                "Assen" => 12,
                "Emmen" => 19
            ],
            "Dinsdag" => [
                "Groningen" => 26,
                "Assen" => 28,
                "Emmen" => 19
            ],
            "Woensdag" => [
                "Groningen" => 16,
                "Assen" => 30,
                "Emmen" => 35
            ]
        ];

        foreach ($weeklyTemps as $x => $x_value) {
            $maxTemp = 0;
            $place = 0;
            foreach ($x_value as $y => $temp) {
                if ($temp > $maxTemp) {
                    $maxTemp = $temp;
                    $place = $y;
                }

            }
            echo "De hoogste temperatuur op " . strtolower($x) . " is " . $maxTemp . "°C in " . "$place" . ".<br>";
        }

        echo "<br>--------Opdracht Fibonnaci!--------<br>";

        /*
        $zeroToninenine = array();
        for ($i = 0; $i <= 99; $i++) {
        $zeroToninenine[] = $i;
        }
        function Fibonacci($number)
        {
        // if and else if to generate first two numbers
        if ($number == 0)
        return 0;
        else if ($number == 1)
        return 1;
        // Recursive Call to get the upcoming numbers
        else
        return (Fibonacci($number - 1) +
        Fibonacci($number - 2));
        }
        foreach ($zeroToninenine as $x => $x_value) {
        if ($x_value == 0) {
        echo "0 ";
        } elseif ($x_value == 1) {
        echo "1 ";
        } elseif ($x_value == Fibonacci($x_calue)) {
        echo "fib";
        } else {
        echo $x_value . " ";
        }
        }
        */
        ?>

        <h1>Problem solving for developpers</h1>

        <h3>Problem 1 <h3>
                <?php
                function fibonacci($n)
                {

                    $array_fibo = [];

                    $num1 = 0;
                    $num2 = 1;

                    $counter = 0;
                    while ($counter < $n) {
                        echo ' ' . $num1;
                        array_push($array_fibo, $num1); # https://www.php.net/manual/en/function.array-push
                        $num3 = $num2 + $num1;
                        $num1 = $num2;
                        $num2 = $num3;
                        $counter = $counter + 1;
                    }

                    return $array_fibo;
                }

                fibonacci(12);

                echo "<h3>Problem 2 : </h3>";

                function display_table($number)
                {
                    echo "<table>";

                    for ($i = 0; $i < $number; $i += 10) {

                        echo '<tr>';
                        for ($j = 0; $j <= 9; $j++) {
                            $tmp = $i + $j;

                            echo "<td>$tmp</td>";
                        }
                        echo '</tr>';
                    }

                    echo "</table>";

                }

                display_table(100);

                echo "<h3>Problem 3 : </h3>";



                function isFibbo($number, $fibo_reeks)
                {

                    $r = array_search($number, $fibo_reeks); # https://www.php.net/manual/en/function.array-search.php
                
                    # checks if number is numeric 
                    $result = is_numeric($r); # https://www.php.net/manual/en/function.is-numeric 
                
                    return $result;
                }


                $fibbo_sequence = Fibonacci(12);
                echo "<br>";


                echo isFibbo(5, $fibbo_sequence);


                echo "<h3>Combine all the functions : </h3>";

                echo "<p> We need to adapt the display function :  </p>";

                function display_table_fibbo($number, $fibo_reeks)
                {
                    echo "<table>";

                    for ($i = 0; $i < $number; $i += 10) {

                        echo '<tr>';
                        for ($j = 0; $j <= 9; $j++) {
                            $tmp = $i + $j;

                            if (isFibbo($tmp, $fibo_reeks)) {

                                echo "<td style = \"background-color : green;\" >$tmp</td>";

                            } else
                                echo "<td>$tmp</td>";

                        }
                        echo '</tr>';
                    }
                    echo "</table>";
                }

                display_table_fibbo(100, $fibbo_sequence);

                ?>


</body>
<style>
    td {
        height: 30px;
        width: 30px;
        border: 1px black;

    }
</style>

</div>

</body>

</html>