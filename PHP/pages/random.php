<?php
include(__DIR__ . '/../bootstrap.php');
$toptext = "Roll the dice!";
$titletext = "DND 3.5 sim?";
include(__DIR__ . '/../_header.php');
?>

<!-- Hier worden twee random getalletjes gemaakt (hitroll, plaatjes en tafelpoten) en de naam van de vorige pagina wordt ingekort als nodig. -->
<?php

$randomInt = random_int(1, 20);
$pootjes = random_int(1, 10);
if (isset($_SESSION['name'])) {
  $name = htmlspecialchars($_SESSION['name'], ENT_QUOTES);
  if (strlen($name) > 25) {
    $name = substr($name, 0, 25);
  }
}
?>

<body>
  <h3><button style="font-size:18px;width:70px;height:70px;margin:10px;"
      onClick="window.location.reload();">Reroll!</button>You rolled:
    <?php echo $randomInt; ?>
  </h3>

  <?php if ($randomInt > 19) { ?> <!-- Als het gaat om een critical hit -->
  <h3>Nice<?php if (isset($_SESSION['name']) && strlen($_SESSION['name']) >= 2) {
      echo ", " . $name;
    }
  ?>! Now roll for crit!
    <button onclick="critroll()">Roll here!</button>
    <div id="crit"></div>
    <div id="critdmgroll"></div>
    <div id="critdmg"></div>
    <div id="critdmgcomment"></div>
    <script>
      function critroll() {
        var critHit = Math.ceil(Math.random() * 20);
        document.getElementById("crit").innerHTML = critHit;
        if (critHit < 11) {
          document.getElementById("critdmgroll").innerHTML = '<button onclick="dmgroll()">Roll for normal damage</button>';
        } else {
          document.getElementById("critdmgroll").innerHTML = '<button onclick="critdmgroll()">Roll for critical damage!</button>';
        }
      }
      function critdmgroll() {
        var critdmg = Math.ceil(Math.random() * 8) + Math.ceil(Math.random() * 8);
        document.getElementById("critdmg").innerHTML = critdmg;
        if (critdmg > 12) {
          document.getElementById("critdmgcomment").innerHTML = "That's an immense amount of damage!";
        } else if (critdmg > 7) {
          document.getElementById("critdmgcomment").innerHTML = "Nice damage!";
        } else if (critdmg > 5) {
          document.getElementById("critdmgcomment").innerHTML = "Good job.";
        } else {
          document.getElementById("critdmgcomment").innerHTML = "Poor damage for a crit :(";
        }
      }
      function dmgroll() {
        var critdmg = Math.ceil(Math.random() * 8);
        document.getElementById("critdmg").innerHTML = critdmg;
        if (critdmg > 6) {
          document.getElementById("critdmgcomment").innerHTML = "Nice damage!";
        } else {
          document.getElementById("critdmgcomment").innerHTML = "Good job.";
        }
      }
    </script>

  </h3>
  <?php } elseif ($randomInt >= 11) { ?> <!-- Als het gaat om een normale hit -->
  <h3>Nice<?php if (isset($_SESSION['name']) && strlen($_SESSION['name']) >= 2) {
      echo ", " . $name;
    }
  ?>!
    <button onclick="dmgroll()">Now roll for damage!</button>
    <div id="damage"></div>
    <div id="dmgcomment"></div>
    <script>
      function dmgroll() {
        var damage = Math.ceil(Math.random() * 8);
        document.getElementById("damage").innerHTML = damage;
        if (damage > 6) {
          document.getElementById("dmgcomment").innerHTML = "That's a lot of damage!";
        } else {
          document.getElementById("dmgcomment").innerHTML = "Good job.";
        }
      }
    </script>
  </h3>
  <?php } else { ?> <!-- als je mist -->
  You missed! You need to roll 11 or higher to hit.
  <?php } ?>

  <!-- Hieronder de knop naar de volgende pagina, waar leuke plaatjes weergeven worden -->
  <br><br><br><br><br>

  <p>
  <form method="post" action="pictures.php">
    <input type="hidden" name="number" value="<?php echo $randomInt; ?>">
    <input type="hidden" name="tafelpoten" value="<?php echo $pootjes; ?>">
    <button type="submit" style="margin:69px;font-size:20px;width:269px;height:40px;">
      Show me
      <?php echo $randomInt; ?> kitten(s)!
    </button>
  </form>

  </p>
  <?php
  include(__DIR__ . '/../_footer.php');
  ?>