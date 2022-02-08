<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
$arrayNumbers = [];

while (count($arrayNumbers) < 15) {
    $number = rand( 1, 100);

    if (!in_array($number, $arrayNumbers)) {
        $arrayNumbers[] = $number;
        echo " " . $number;
    }
};
var_dump($arrayNumbers)

?>