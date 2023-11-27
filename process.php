<?php
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];

$originalLength = strlen($paragraph);
$wordCount = str_word_count($paragraph);
$censoredParagraph = str_replace($badWord, '***', $paragraph);
$censoredLength = strlen($censoredParagraph);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords - Risultato</title>
</head>

<body>


    <h2>Paragrafo originale:</h2>
    <p>
        <?php echo $paragraph ?>
    </p>
    <p>Lunghezza:
        <?php echo $originalLength ?>
    </p>
    <p>Conteggio parole:
        <?php echo $wordCount ?>
    </p>

    <h2>Paragrafo censurato:</h2>
    <p>
        <?php echo $censoredParagraph ?>
    </p>
    <p>Lunghezza:
        <?php echo $censoredLength ?>
    </p>
    <p>Conteggio parole:
        <?php echo str_word_count($censoredParagraph) ?>
    </p>
</body>

</html>