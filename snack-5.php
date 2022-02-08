<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php
$text = 'il giovane Barone Cosimo Piovasco di Rondò, ribelle indomabile, è il primogenito di una famiglia nobile 
momentaneamente decaduta. In seguito ad un litigio con suo padre,
 poiché si rifiuta di mangiare un piatto di lumache, decide di salire su  un albero per non scenderne mai più.';

$paragraph = explode('. ', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul><?php for ($i=0; $i < count($paragraph); $i++) { ?>
        <li> <?= $paragraph[$i]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>