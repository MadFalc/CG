<?php
include('C:\xampp\htdocs\opdrachten\CG\PHP\bootstrap.php');

unset($_SESSION['authenticated_user']);

header('Location: login.php');
exit;
?>