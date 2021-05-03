<?php
$text = "oggi ho iniziato php, oggi ho fatto la pasta al pesto, poi sempre oggi ho preso un caffè, poi ho steso i panni, sempre oggi devo fare la spesa ";
$bad_word = $_GET['word_censored'];
$lenght = strlen($text);
$text_cens = str_replace($bad_word, '***', $text);
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
    
    <p><?php echo $text_cens; ?></p>

    <h3>Text Lenght:  <?php echo $lenght ?> caratteri </h3>
    

</body>
</html>