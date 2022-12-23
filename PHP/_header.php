<?php
$titletext = $titletext ?? 'Stiekeme title!';
$toptext = $toptext ?? 'Lege toptext!';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="\opdrachten\CG\PHP\bootstrap.min.css"> -->
    <link rel="stylesheet" href="\opdrachten\CG\PHP\style.css">
    <link rel="shortcut icon" href="\opdrachten\CG\PHP\img\heart icon.gif" type="image/gif">
    <!--Kijk Tomi, als je hem opent in Firefox, dan pulseert het hartje!-->
</head>

<body>
    <ul class="menu" id=menu>
        <li><a href="\opdrachten\CG\PHP\public\index.php">Index?</a></li>
        <li><a href="\opdrachten\CG\PHP\pages\homepage.php">Home</a></li>
        <li><a href="\opdrachten\CG\PHP\pages\blok1.php">Blok 1</a></li>
        <li><a href="\opdrachten\CG\PHP\pages\blok2pt1.php">Blok 2 (1/3)</a></li>
        <li><a href="\opdrachten\CG\PHP\pages\blok2pt2.php">Blok 2 (2/3)</a></li>
        <li><a href="\opdrachten\CG\PHP\pages\blok2EindOpdr.php">Blok 2 (3/3)</a></li>
        <li><a href="\opdrachten\CG\PHP\pages\login.php">Login for secret</a></li>
        <li><a href="\opdrachten\CG\PHP\pages\name.php">Dice game</a></li>
        <br>
        <?php
        if (isset($_SESSION['authenticated_user'])) {
        ?>
        <li>You are logged in as:
            <?php echo $_SESSION['authenticated_user']; ?>
        </li>
        <li><a href="\opdrachten\CG\PHP\pages\logout.php">Log out</a></li>
        <?php
        } else {
        ?>
        <li><a href="\opdrachten\CG\PHP\pages\login.php">Log in</a></li>
        <?php
        }
        ?>
    </ul>
    <div class="top" id=top style="margin-top:30px;">
        <?php echo $toptext; ?>
    </div>

    <head>
        <title><?php echo htmlspecialchars($titletext, ENT_QUOTES); ?></title>
    </head>
    <div class="mark" id=mark>
        <a href="https://codegorilla.nl/"><img src="\opdrachten\CG\PHP\img\CG.png" alt="CG logo"
                style="height:100px;"></a>
    </div>
    <div class="main">
        <!-- Message wordt hier gedraaid. In _flash_message.php wordt message weer 'unset', waardoor dit maar eenmalig gebeurt. -->
        <?php include(__DIR__ . '/_flash_message.php'); ?>