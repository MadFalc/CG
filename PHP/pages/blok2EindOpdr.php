<?php
include(__DIR__ . '/../bootstrap.php');
$toptext = "BLOK 2 eindopdracht";
$titletext = "Blok 2 (3/3)";
include(__DIR__ . '/../_header.php');
?>
<!-- Hieronder een bestand in dezelfde folder (PHP), waarin de eindopdracht los verwerkt staat, 
en deze maakt op zijn beurt gebruik van andere bestanden in de mapjes /controllers,/ img, en /models -->
<?php
require 'EindOpdr.php';
?>
<?php
include(__DIR__ . '/../_footer.php');
?>