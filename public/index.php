<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="js/app.js"></script>
  </head>
  <body>
    <?php
      $string = file_get_contents("../dictionnaire.txt", FILE_USE_INCLUDE_PATH);
      $dico = explode("\n", $string);

      echo "Exo1: Ce dico contient ".count($dico)." mots.</br>";

      $mots = 0;
      $strgLgth = 0;
      foreach ($dico as $key => $word){
        $strgLgth = strlen($word);
        if ($strgLgth === 15) {
          $mots++;
        }
      }
      echo 'Exo2 : '.$mots.' mots sont composés de 15 caractères. </br>';

      $words = 0;
      foreach($dico as $string => $word){
        if (strpos($word, 'w') == true){
          $words++;
        }
      }
      echo('Exo3 : '.$words.' mots contiennent la lettre w. </br>');

      $wordsQ = 0;
      foreach($dico as $string => $word){
        if (substr($word, -1)==='q'){
          $wordsQ++;
        }
      }
      echo ('Exo4 : '.$wordsQ.' mots se terminent par la lettre Q. </br>');

      ?>
  </body>
</html>
