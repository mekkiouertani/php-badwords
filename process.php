<?php
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];

$originalLength = strlen($paragraph);
$censoredParagraph = str_ireplace($badWord, '***', $paragraph);

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



    <h2>Paragrafo censurato:</h2>
    <p>
        <?php echo $censoredParagraph ?>
    </p>

</body>

</html>