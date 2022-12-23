<!-- Hieronder is een if statement die kijkt of message aangemaakt is en vervolgens echo't hij die message.
In mijn geval is message in name ge-set en vertoond in random.php, vervolgens (unset) wordt message verwijdert. -->

<?php
if (isset($_SESSION['message'])) {
?>
<div class="alert alert-primary" role="alert">
    <?php
    echo htmlspecialchars($_SESSION['message'], ENT_QUOTES);
    ?>
</div>
<?php

    unset($_SESSION['message']);
}
?>