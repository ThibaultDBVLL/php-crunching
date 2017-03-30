<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
      $dico = explode("\n", $string);
     ?>

  </body>
</html>
