<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
   $name ='Janusz';
   echo "Twoje imię; $name<br>";
   echo "Twoje imię; $name<br>";

//system liczbowy
$x =10;
$hex=0xA;
$oct=021;
$bin=0b1011;

echo $hex; //
echo $oct; //
echo $bin,'<hr>'; //

//heredoc

$name ='Anna';
$surname='Kowal';

echo <<< Etykieta
imie:  $name<br>
nazwisko: $surname<hr>
Etykieta;


$x= <<< Etykieta
heredoc<br>
imie:  $name<br>
nazwisko: $surname<hr>
Etykieta;

echo $x;
//nowdoc

echo <<<'e'
nowdoc<br>
imie:  $name<br>
nazwisko: $surname<hr>
e;

$x=20;
echo "nazwa zmiennej: \$x ma wartość $x";

/*
// Najszybszy heredoc
*/
     ?>
  </body>
</html>
