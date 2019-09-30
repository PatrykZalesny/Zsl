<?php
$potęga = 2 ** 10;
echo $potęga;


$a=1;
$b=1.0;

if ($a == $b) {
  echo "$a jest równa $b";
}
else {
  echo"$a jest równa $b";
}



/*if ($a == $b) {
  echo "$a jest równa $b";
}
if ($a == $b) {
  echo "$a jest równa $b";
}*/

if ($a === $b) {
  echo "$a jest identyczna $b";
}
else {
  echo"$a nie jest identyczna $b";
}

echo gettype($a),'<br>';
echo gettype($b);'<br>';

$x= 1;
$y= 1;
$result =$x <=> $y;
echo $result,'<hr><hr>';



########################

$x=2;
echo $x++;  //2
echo ++$x;  //4
echo $x;  //4

$y=$x++;
echo $y;  //4
$y=++$x;
echo $y;  //6
echo ++$y;;  //7

########################
//operatory rzutowania
//bool, int , float , string , array , object , unset


$text1 = '123abc';
$text1 = (int)$text1;
echo $text1,'<br>';  //123



$text2 = 0;
$text2 = (bool)$text2;
echo $text2,'<br>';  //1 - prawda |jak nic nie ma to false
echo gettype($text2); //null



$text3 = 123;
$text3 = (unset)$text3;
echo $text3,'<br>';
echo gettype($text3),'<br>'; //null
########################################################################

$x=10;
echo is_string($x); //false
echo is_bool($x); //false
echo is_float($x); //false
echo is_int($x); //true
echo is_null($x),'<br>'; //false


$w;
echo @gettype($w),'<hr>'; // @ - operator ignorowania błędów


########################################################################
//Zmienne superglobalne
//$_GET, $_POST, $_COOKTIE,$_FILES,$_SESSION,$_SERVER
echo $_SERVER['SERVER_PORT'],'<br';    //80
echo $_SERVER['SERVER_NAME'],'<br>';   //127.0.0.1
echo $_SERVER['SCRIPT_NAME'],'<br>';   //
echo $_SERVER['SERVER_PROTOCOL'],'<br>';   //
echo $_SERVER['DOCUMENT_ROOT'],'<br>';   //

$localFIle = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'].'<br>';

$localFIle = $_SERVER['DOCUMENT_ROOT'];
$localFIle .= $_SERVER['SCRIPT_NAME'].'<br>'; // to samo,ten sposób lepszy gdy jest więcej linii

echo $localFIle;

########################################################################
//stałe
//nazwy stałych zapisujemy z wielkich liter !!!, nie maja $ dolara
define('NAZWISKO','Kowalski');
echo NAZWISKO,'<br>';


define('imie','Janusz');
echo imie,'<br>';


define('SURNAME','Nowak',true ); //w 8 wersji brak 3 argumentu
echo Surname,'<br>';
########################################################################
//stałe predefiniowane
echo PHP_VERSION,'<br>';
echo gettype(PHP_VERSION),'<br>';

if (PHP_VERSION>5.6) {
   echo 'now wersja php<br>';
}
else {
  echo 'Stara wersja php<br>';
}

echo PHP_OS; //WINNT
echo __Line__;
echo __FILE__;
echo __DIR__;




 ?>
