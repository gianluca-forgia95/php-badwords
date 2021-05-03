<?php
$text = "oggi ho iniziato php, oggi ho fatto la pasta al pesto, poi sempre oggi ho preso un caffè, poi ho steso i panni, sempre oggi devo fare la spesa ";
$bad_word = $_GET['word_censored'];
// if ( $bad_word == 'coglione') {
//   $bad_word = '***';
// }
// $text .= $bad_word;
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
    
    <p><?php echo str_replace($bad_word, '***', $text); ?></p>

</body>
</html>