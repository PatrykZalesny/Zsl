<?php

function value($a)
{
 if ($a>0) {
   return "dodatnia";
 }
else if ($a==0){
  return "zero";
}
else {
  return "ujemna";
}
}
echo value(-1),'<br>';//ujemna
echo gettype(value(-1)),'<br>';//string

function getValue():int{
return 10.99;

}

echo getValue(),'<hr>';


###########################################################################
//zasięg zmiennych

$x= 10;
function show(){
/*echo "Wartość zmiennej \$x wynosi echo $GLOBALS['x'];  trzeba usunać ''  */
//echo $GLOBALS['x'];
echo "Wartość zmiennej \$x wynosi $GLOBALS[x]",'<hr>';

}
show();

###########################################################################


$y= 30;
function show1(){
  global $y;
echo "Wartość zmiennej \$y wynosi: wynosi $y",'<br>';


}
show1();

###########################################################################

function sum(){
$number = 10;
  echo "\$liczba wynosi: $number <br>";
  $number +=10;

}
sum();
sum();
echo "<hr>";



function sum1(){
 static $number = 10;
  echo "\$liczba wynosi: $number <br>";
  $number +=10;

}
sum1();
sum1();
sum1();

//zwiększa sie za każdym razem gdy wywołamy funkcje
###########################################################################

//Argumenty

function add($x,$y=1){
return $x+$y;


}
$z=9;
echo add(5),'<br>';//6
echo add(5,10),'<br>';
echo add($z),'<hr>';



###########################################################################

//arugmenty i typy danych

function multi(float $x,int $y){
return $x * $y;


}

echo multi(3,4),"<br>";
echo multi(2,5,4),"<br>";
echo multi(4,2,5),"<br>";

###########################################################################
/*
Napisz menu w którym użytkowni wybiera jedno z działań,
wykorzystaj do tego pole radio (suma, przedzial)
suma -  pobierze dane z 2 pol tekstowych i zsumuje je wykorzystyując funkcje
suma
przedzial - pobierze dane z 2 pol tekstowych i wyswietli liczby rosnac
z przedzialu wykorzystując funkcje przedzial

*/








 ?>
