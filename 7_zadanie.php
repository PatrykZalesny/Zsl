<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post">
      <input type="number" name="text1" placeholder="początek zakresu"><br><br>
      <input type="number" name="text2" placeholder="koniec zakresu"><br><br>
      <input type="radio" name="dzialanie" value="suma">suma <br>
      <input type="radio" name="dzialanie" value="przedzial">przedzial<br><br>
        <input type="submit" name="button" value="Zatwierdź"><br><hr>
    </form>
    <?php

    /*
    Napisz menu w którym użytkowni wybiera jedno z działań,
    wykorzystaj do tego pole radio (suma, przedzial)
    suma -  pobierze dane z 2 pol tekstowych i zsumuje je wykorzystyując funkcje
    suma
    przedzial - pobierze dane z 2 pol tekstowych i wyswietli liczby rosnac
    z przedzialu wykorzystując funkcje przedzial
   */
    if (!empty($_POST['text1']) && !empty(['text2']) && !empty($_POST['dzialanie']) ) {
    $a=$_POST['text1'];
    $b=$_POST['text2'];
    $dzialanie=$_POST['dzialanie'];
}
switch ($dzialanie) {
  case 'suma' :
    $dzialanie='suma';
    $value=1;
    break;
   case 'przedzial':

   $dzialanie='dzialanie';
   $value=2;
     break;
}

function suma($a,$b){
return $a+$b;
}

function przedzial($a,$b)
{
  while ($a <= $b) {
     echo $a,":";
     $a++;
  }

}

if ($value==1) {
  echo "suma:",suma($a,$b),'<br>';
}
else {

  echo "przedzial:", przedzial($a,$b);
}

     ?>
  </body>
</html>
