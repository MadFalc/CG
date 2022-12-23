<?php
include(__DIR__ . '/../bootstrap.php');
$toptext = "The Elephpant!";
$titletext = "Secret picture!";
include(__DIR__ . '/../_header.php');

// Hieronder worden name, language en message geset. Message gebeurt in dit geval alleen wanneer name bestaat.
if (isset($_SESSION['authenticated_user'])) {
    $_SESSION['message'] = '(Secret message because you logged in first! Hurrahh!!)';
}

if (!isset($_SESSION['authenticated_user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret</title>
</head>

<body>
    <p>Here's something special for you,
        <?php echo $_SESSION['authenticated_user']; ?>:
    </p>
    <p><img src="img/elephpant.jpg" alt="An elephpant"></p>

    <form method="post" action="name.php">
        <input type="hidden">
        <button type="submit" style="margin:69px;font-size:20px;width:269px;height:40px;">
            Let's continue!
        </button>
    </form>

    <?php
    include(__DIR__ . '/../_footer.php');
    ?>