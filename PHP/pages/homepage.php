<?php
include(__DIR__ . '/../bootstrap.php');
$toptext = '<img src="\opdrachten\CG\PHP\img\HOME.png" alt="topper" style="height:100px;">';
$titletext = "Home!";
include(__DIR__ . '/../_header.php');
?>
<style>
    #top {
        padding-bottom: 0px;
        padding-top: 26px;
    }
</style>

Moet je dit lezen.
<?php

$variabele = "Lennart";
echo "<div style='color: red;'> $variabele </div>";
?>

<?php
include(__DIR__ . '/../_footer.php');
?>