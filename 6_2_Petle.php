<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/petle.css">
  </head>
  <body>
<table>
  <?php
  $wiersz=1;
  echo "<tr>";
  do {
    $kolumna=1;
    do {
      if ($wiersz==$kolumna) {

          echo '<td class="klasa">',$wiersz * $kolumna,'</td>';

      }
      else
      {
        echo '<td>',$kolumna * $wiersz,'</td>';

      }
          $kolumna++;


   } while ($kolumna <= 10);


echo '</tr>';
$wiersz++;


} while ($wiersz<=10);


   ?>

</table>




  </body>
</html>
