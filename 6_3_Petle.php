<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/petle.css">
  </head>
  <body>
<table>
  <form method="post">
    <input type="number" name="wielkosc">
    <input type="submit" name="button "value="Zatwierdz">
  </form>
  <?php

  $suma=0;
  if (!empty($_POST['wielkosc'])) {
    $wielkosc=$_POST['wielkosc'];
  }
  $wiersz=1;
  echo "<tr>";
  do {
    $kolumna=1;
    do {
      if ($wielkosc+1==$kolumna+$wiersz) {
        echo '<td class="klasa">',$wiersz * $kolumna,'</td>';
      }

      else if ($wiersz==$kolumna)
      {echo '<td class="klasa">',$wiersz * $kolumna,'</td>';
      }

      else
      {
        echo '<td>',$kolumna * $wiersz,'</td>';

      }
          $kolumna++;


   } while ($kolumna <=$wielkosc);


echo '</tr>';
$wiersz++;


} while ($wiersz<= $wielkosc);


   ?>

</table>




  </body>
</html>
