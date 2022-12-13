<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The cookie that became a session</title>
</head>

<?php
session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['language'] = $_GET['language'];
    if ($_POST['name'] >= 2) {
        $_SESSION['message'] = '(Thanks for telling us your name!)';
    }
    header('Location: random.php');
    exit;
}

/*----------------------------
"Congratulations" gekopieerd:
----------------------------*/

$availableLanguages = [
    'en' => 'English',
    'ger' => 'German',
    'nl' => 'Dutch'
];

// Default language: en
$defaultLanguage = 'en';

$selectedLanguage = $defaultLanguage;

if (isset($_GET['language'])) {
    // If the user selected a language, use it
    $selectedLanguage = $_GET['language'];
} elseif (isset($_SESSION['language'])) {
    // If the language is stored as a session, use it
    $selectedLanguage = $_SESSION['language'];
}

// If the language doesn't actually exist, use the default language
if (!isset($availableLanguages[$selectedLanguage])) {
    $selectedLanguage = $defaultLanguage;
}

$messages = [
    'en' => 'Continue with (or without) your name to play a game!',
    'ger' => 'Fahren Sie mit (oder ohne) Ihrem Namen fort, um ein Spiel zu spielen!',
    'nl' => 'Ga verder met (of zonder) je naam om een spelletje te spelen!'
];
?>


<body>
    <form method="get">
        <p>
            <label for="language">Language:</label>
            <select id="language" name="language">
                <?php
                foreach ($availableLanguages as $key => $value) {
                ?>
                <option value="<?php echo htmlspecialchars($key, ENT_QUOTES); ?>" <?php if ($selectedLanguage===$key) {
                    ?> selected
                    <?php } ?>>
                    <?php echo htmlspecialchars($value, ENT_QUOTES); ?>
                </option>
                <?php
                }
                ?>
            </select>
        </p>
        <p>
            <button type="submit">Select</button>
        </p>
    </form>
    <br><br><br><br><br>
    <p class="message">
        <?php echo $messages[$selectedLanguage]; ?>
    </p>

    <form method="post">
        <p>
            <label for="name">
                Your name (min 2 chars):
            </label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <button type="submit">Continue</button>
        </p>
    </form>
</body>

</html>