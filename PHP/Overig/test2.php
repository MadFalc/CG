<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kittens. Or not.</title>
</head>

<body>
    <form>
        <div>
            <label for="picture">
                Wil je zelf wat katjes en tafelpoten genereren? Of heb je liever appels ipv katten? Ziehier(vul niet te
                hoge getallen in!):
            </label>
            <br>
            <select name="picture" id="picture">
                <option value="cat.png" <?php if (isset($_GET['picture']) && $_GET['picture'] === 'cat.jpg') { ?> selected
                    <?php
                } ?>>Cat
                </option>
                <option value="apple.jpg" <?php if (isset($_GET['picture']) && $_GET['picture']==='apple.jpg') { ?>
                    selected
                    <?php
                } ?>>Apple
                </option>
            </select>
            <label for="number">
                Number of pictures to show:
            </label>
            <input name="number" value="<?php
            if (isset($_GET['number'])) {
                echo htmlspecialchars($_GET['number'], ENT_QUOTES);
            }
            ?>">
            <label for="tafelpoten">
                Number of tablelegs to show:
            </label>
            <input name="tafelpoten" value="<?php
            if (isset($_GET['tafelpoten'])) {
                echo htmlspecialchars($_GET['tafelpoten'], ENT_QUOTES);
            }
            ?>">
            <br>
            <button type="submit" style="font-size:20px;width:120px;height:40px;">Submit</button>
        </div>
    </form>
    <br>
    <?php

    $numberOfKittens = isset($_GET['number']) ? (int) $_GET['number'] : 1;
    $testnummer = isset($_GET['tafelpoten']) ? (int) $_GET['tafelpoten'] : 1;
    if ($numberOfKittens < 1 || $testnummer < 1) {
        $numberOfKittens = 0;
        $testnummer = 0;
    ?>
    Niet iets geks invullen! Vul een getal hoger dan 0 in, maar niet te hoog!!
    <?php
    }

    $picture = isset($_GET['picture']) ? $_GET['picture'] : 'cat.png';

    if ($numberOfKittens > 1000 || $testnummer > 1000) {
    ?>Wat zei ik nou? Niet te hoog!
    <?php
    } else {

        for ($i = 1; $i <= $numberOfKittens; $i++) {
    ?>
    Picture
    <?php echo $i; ?>:
    <img src="<?php echo htmlspecialchars($picture, ENT_QUOTES); ?>" alt="Picture <?php echo $i; ?>" height=125px>
    <?php
        }
        echo "<br>";

        for ($i = 1; $i <= $testnummer; $i++) {
    ?>
    Cool
    <?php echo $i; ?>
    <img src="tafelpoot.jpg" alt="table leg <?php echo $i; ?>" width=125px>
    <?php
        }
    }
    ?>
</body>

</html>