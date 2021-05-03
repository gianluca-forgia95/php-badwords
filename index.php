<?php
$text = "Ciao oggi sono andato al mare e mi sono bruciato la schiena, sono proprio un ";
$bad_word = $_GET['parolaccia'];
$text .= $bad_word;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p> <?php echo $text; ?> </p>
</body>
</html>