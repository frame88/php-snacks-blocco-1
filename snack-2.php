<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php 
// $name = $_GET["name"];
// $age = $_GET["age"];
// $mail = $_GET["mail"];
// echo $name;
// echo $mail;
// echo $age;

if (empty($_GET['mail']) === false && empty($_GET['name']) === false && empty($_GET['age']) === false ) {
    $name = $_GET["name"];
    $age = $_GET["age"];
    $mail = $_GET["mail"];
    if (strpos($mail, '@') !== false && strpos($mail, '.') !== false && strlen($name) > 3 && is_numeric($age) == true) {
      echo 'Accesso riuscito';
    //   echo str_contains($mail, '@'); provato con str_contains ma risulta utilizzabile su php 8
    } else {
      echo 'Accesso negato';
    }
  } 
  

?>