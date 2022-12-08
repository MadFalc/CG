<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leuk testbestandje</title>
</head>

<?php $randomInt = random_int(1, 10);
$pootjes = random_int(1, 10); ?>

<head>
  <title>Your lucky number</title>
</head>

<body>
  <h1>Your lucky number is:
    <?php echo $randomInt; ?>
  </h1>
  <?php if ($randomInt > 5) { ?>
  <h2>Nice!</h2>
  <?php } ?>
  <p>
    <a href="test2.php?number=<?php echo $randomInt; ?>&tafelpoten=<?php echo $pootjes; ?>">
      Now show me
      <?php echo $randomInt; ?> kittens!
    </a>
  </p>
</body>

</html>