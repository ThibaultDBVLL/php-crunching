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

  // On passe aux films! \\

  $string = file_get_contents("../films.json", FILE_USE_INCLUDE_PATH);
  $brut = json_decode($string, true);
  $top = $brut ["feed"]["entry"];
  $top100 = count($top);

  echo"<h3> top 10 des films </h3>";
  for ($i=1; $i<=10; $i++){
    $titre = $top[$i]['im:name']['label'];
    echo $i.' '.$titre.' '."<br/>";
  }


  // echo "<h3>Classement du film gravity</h3>";
  // for ($i=0; $i=<)

  echo "<h3>Réalisateur du film Lego the movie</h3>";
  for ($i = 0; $i<$top100; $i++){
    $titre = $top[$i] ["im:name"]["label"];
    if ($titre === "The Lego Movie"){
      echo "Les réalisateurs du film The Lego Movie sont ".$top[$i]["im:artist"]["label"];
    }
  }
  echo "<h3>Nombre de films sortis avant 2000</h3>";
  $nbFilms=0;
  for($i=0; $i<$top100; $i++){
  $date = $top[$i]['im:releaseDate']['label'];
  if (date_parse($date)['year']<2000){
    $nbFilms++;
  }
}
echo 'Le nombre de films sortis avant 2000 est de : '.$nbFilms;

echo "<h3>Film le plus récent</h3>";
for ($i=0; $i<$top100; $i++){
  if($i==0){
    $filmRecent=$top[$i];
  }else{
    $date = $top[$i]['im:releaseDate']['label'];
    $filmPeutRecent = $filmRecent['im:releaseDate']['label'];
    if($date>$filmPeutRecent){
      $filmRecent = $top[$i];
    }
  }
}
echo 'le film le plus récent du classement est : '.$filmRecent['im:name']['label'];

echo "<h3>Film le plus anciens</h3>";
    $filmVieux = '';
    for($i=0; $i<$top100; $i++){
        if($i ==0){
            $filmVieux=$top[$i];
        }
        else{
            $date = $top[$i]['im:releaseDate']["label"];
            $filmAncien = $filmVieux['im:releaseDate']["label"];
            if($date< $filmAncien){
                $filmVieux = $top[$i];
            }
        }
    }
    echo "Le film le plus vieux du classement est ".$filmVieux['im:name']["label"];


    echo "<h3>La catégorie de films la plus représentée</h3>";
      $catégorie = ' ';
      for ($i=0; $i<100; $i++){
        if (['attributes']['term'] == )
      }

  ?>
</body>
</html>
