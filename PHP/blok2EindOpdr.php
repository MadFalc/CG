<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blok 2 eindopdracht!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/heart icon.gif" type="image/gif">
    <!--Kijk Tomi, als je hem opent in Firefox, dan pulseert het hartje!-->
</head>

<body>
    <div class="top" id=top style="margin-top:30px;">
        BLOK 2 - Eindopdracht
    </div>
    <div class="mark" id=mark>
        <a href="https://codegorilla.nl/"><img src="img/CG.png" alt="CG logo" style="height:100px;"></a>
    </div>
    <ul class="menu" id=menu>
        <li><a href="index.php">Home</a></li>
        <li><a href="blok1.php">Blok 1</a></li>
        <li><a href="blok2pt1.php">Blok 2 (1/3)</a></li>
        <li><a href="blok2pt2.php">Blok 2 (2/3)</a></li>
        <li><a href="blok2EindOpdr.php">Blok 2 (3/3)</a></li>
    </ul>

    <div class="main">
        <?php
        require 'EindOpdr.php';
        ?>
    </div>
    <div class="socials" id=socials>
        <a href="https://www.linkedin.com/in/lennart-claus/"><img src="img/LinkedIn.png" alt="LinkedIn"
                style="height:40px;"></a><br>
        <a href="https://github.com/MadFalc/CG.git"><img src="img/github.png" alt="Github" style="height:40px;"></a>
    </div>

</body>

</html>