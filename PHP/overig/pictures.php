<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kittens. Or not.</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="picture">
                Wil je zelf wat katjes en tafelpoten genereren? Of heb je liever appels ipv katten? Ziehier(vul niet te
                hoge getallen in!):
            </label>
            <br>
            <?php
            $pictures = [
                'cat.png' => 'Cat',
                'apple.jpg' => 'Apple',
                'doggy.jpg' => 'Doggy'
            ];
            ?>
            <select name="picture" id="picture">
                <?php foreach ($pictures as $filename => $description) {
                ?>
                <option value="<?php
                    echo htmlspecialchars($filename, ENT_QUOTES);
                ?>" <?php                    if (isset($_POST['picture']) && $_POST['picture'] === $filename) { ?> selected
                    ?>
                    <?php
                    }
                ?>>
                    <?php echo htmlspecialchars($description, ENT_QUOTES); ?>
                </option>
                <?php
                } ?>
            </select>
            <label for="number">
                Number of pictures to show:
            </label>
            <input name="number" value="<?php
            if (isset($_POST['number'])) {
                print htmlspecialchars($_POST['number'], ENT_QUOTES);
            }
            ?>">
            <label for="tafelpoten">
                Number of tablelegs to show:
            </label>
            <input name="tafelpoten" value="<?php
            if (isset($_POST['tafelpoten'])) {
                print htmlspecialchars($_POST['tafelpoten'], ENT_QUOTES);
            }
            ?>">
            <br>
            <button type="submit" style="font-size:20px;width:120px;height:40px;">Submit</button>
        </div>
    </form>
    <br>
    <?php

    $numberOfKittens = isset($_POST['number']) ? (int) $_POST['number'] : 1;
    $testnummer = isset($_POST['tafelpoten']) ? (int) $_POST['tafelpoten'] : 1;
    if ($numberOfKittens < 1 || $testnummer < 1) {
        $numberOfKittens = 0;
        $testnummer = 0;
    ?>
    Niet iets geks invullen! Vul een getal hoger dan 0 in, maar niet te hoog!!
    <?php
    }

    $picture = isset($_POST['picture']) ? $_POST['picture'] : 'cat.png';

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