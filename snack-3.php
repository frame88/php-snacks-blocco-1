<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php
    $arrayNumbers = [];
    while(count($arrayNumbers) < 15){
        $number = rand(1,100);
        if(!in_array($number, $arrayNumbers)){
            $arrayNumbers[] = $number;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <?php foreach($arrayNumbers as $number){
        echo '<div>' . $number . '<div>';
    } ?> 
    <h1>Fatto!</h1>
</body>
</html>