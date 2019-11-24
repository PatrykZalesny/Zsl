<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/5_form.css">
  </head>
  <body>
<table>
  <?php
  $wiersz=1;
  echo "<tr>";
  do {
    $kolumna=1;

    do {
    echo '<td>',$kolumna * $wiersz,'</td>';
      $kolumna++;
   } while ($kolumna <= 10);


echo '</tr>';
$wiersz++;


} while ($wiersz<=10);


   ?>

</table>




  </body>
</html>
