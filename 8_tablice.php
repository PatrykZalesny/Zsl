
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="8_tablice.php" method="post">
<input type="text" name="tekst"><br>
<input type="submit" name="submit" value="ok">
</form>
  </body>
</html>


<?php
if (!empty($_POST['tekst'])) {
$tekst=$_POST['tekst'];
}


 ?>




<?php
//tablice indeksowane numerycznie

$colors = array("Red","Green","Blue");
$colors[3]="Magenta";


function ShowArray($colors)
{

  for ($i=0; $i < count($colors); $i++) {
  $j=$i+1;
  echo "kolor:$j $colors[$i] <br>";
  }
}
 ShowArray($colors);
 echo "<hr>";

 #############################################

//tablica assocjacyjne - tablica zamiast indexu jest klucz
$data = array(
  "name" => "Janusz",
   "surname" => "Nowak",
   "age" => 20,
   "Country" => "Polska",
);
echo $data["age"],'<br>';
echo "<hr>";
//  tablice assocjacyjne wyswietlamy foreach.


 function ShowArrayAssoc($data)
 {
foreach ($data as $key => $value)
  {
    echo "$key: $value <br>";
  }

}

ShowArrayAssoc($data);
#############################################
//tablice wielowymiarowe
$student = array(
array("Anna","Nowak","Polska"),
array("Tomasz"),
array("Krystyna","Pawlak"),
array("Anna","Pawlak")

);


echo $student [2][0],"<hr>";

echo "FOR","<br>";
function ShowArray2($student){

for ($k=0; $k <count($student) ; $k++)
{
  for ($l=0; $l <count($student[$k]) ; $l++)
   {
    echo $student[$k][$l]," ";
   }
   echo "<br>";
 }
}


ShowArray2($student);
echo "<hr>";

echo "FOREACH","<br>";
function ShowArray3($student){

  foreach ($student as $key =>  $value)
  {
     foreach ($student[$key] as $key => $value) {
     echo "$value ";
    }
    echo "<br>";
  }
}

/*
foreach ($variable as $value) {
  foreach ($variable as $x) {
  echo "$x ";
  }
}
*/

ShowArray3($student);
echo "<hr>";

/*
zad.dom tablice 3-wymiarowa oraz 5-wymiarowa

napisz do tych tablic funckje wyswietlajce dane
*/


//sortowanie


$tab = array(10, 1, 15, 20, 100, 8, 10);

function ShowArraySort($tab){
  foreach($tab as  $value) {
  echo "$value ";
  }
  echo "<hr>";
}
ShowArraySort($tab);



//niemalejąco

sort($tab);
ShowArraySort($tab);

//nierosnąco
rsort($tab);
ShowArraySort($tab);



//sortowanie tablicy assocjacyjnej niemalejąco

$tabAssoc = array(

"name" =>"Janusz",
"surname" =>"Nowak",
"age" =>"20",
"country" =>"Poznan",
);

asort($tabAssoc);
ShowArrayAssoc($tabAssoc);

echo "<hr>";

//sortowanie tablicy assocjacyjnej nierosnąco

arsort($tabAssoc);
ShowArrayAssoc($tabAssoc);

echo "<hr>";



//sortowanie tablicy assocjacyjnej według klucza niemalejąco

ksort($tabAssoc);
ShowArrayAssoc($tabAssoc);

echo "<hr>";


//sortowanie tablicy assocjacyjnej według klucza nierosnąco

krsort($tabAssoc);
ShowArrayAssoc($tabAssoc);
echo "<hr>";

//wyświetlanie danych

var_dump($tabAssoc);

echo "<hr>";

print_r($tabAssoc);

echo "<hr>";

echo "<pre>";
print_r($tabAssoc);
echo "</pre>";

echo "<hr>";



echo "<pre>";
print_r($tekst);
echo "</pre>";








?>
