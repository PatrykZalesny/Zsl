<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
    <link rel="stylesheet" href="./css/5_form.css">
  </head>
  <body>

    <?php
    require './form1.php';
      if (!empty($_POST['city']) && !empty($_POST['name']) && !empty($_POST['address'])&&!empty($_POST['school']) ) {
        $city = $_POST['city'];
        $name = $_POST['name'];
        $szkola = $_POST['school'];
        $address = nl2br($_POST['address']);


require '.\switch.php';
?>
<table>
<tr>
  <th>Imię</th>
  <th>Miasto</th>
  <th>Adres</th>
  <th>Szkola</th>
</tr>
<tr>
    <td><?php echo $szkola; ?></td>
  <td><?php echo $name; ?></td>
  <td><?php echo $city; ?></td>
  <td><?php echo $address; ?></td>

</tr>
</table>
<br>
<?php

        echo "Miasto: $city";
      }

      ?>


   </body>
</html>
