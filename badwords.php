<?php
$text = $_GET['text'];

$badword = $_GET['badword'];

$text_length = strlen($text);

$censored_text = str_replace($badword, '***', $text);
$new_text_length = strlen($censored_text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <div class="container my-5">
        <div id="text">
            <h1 class="text-warning">Testo non censurato</h1>
            <p><?= $text ?></p>
            <span>Lunghezza del paragrafo: <?= $text_length ?></span>
        </div>

        <div id="text-censored">
            <h1 class="text-success mt-5">Testo censurato</h1>
            <p><?= $censored_text ?></p>
            <span>Lunghezza del paragrafo: <?= $new_text_length ?></span>

            <h4 class="mt-5">Parola Censurata</h4>
            <p>
                <?= $badword ?>
            </p>
        </div>
    </div>
</body>
</html> 