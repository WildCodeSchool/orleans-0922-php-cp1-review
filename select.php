<?php
 /*
    1 - Créer une table vinyls en BDD : 
       - id INT clé primaire auto incrémentée
       - title STRING 200 caractères max
       - cover STRING 255 caractères max
       - artist STRING 200 caractères max
       - genre STRING 100 caractères max
    2 - Saisir au moins 5 lignes d'exemples.
    3 - Ecrire le code PHP qui permet de récupérer ces lignes en BDD pour les afficher 
    dans un joli tableau HTML :-D
 */
require '_env.php';
$pdo = new \PDO(DSN, USER, PASS);


 $query = 'SELECT * FROM vinyls';
 $statement = $pdo->query($query);

 $vinylArray = $statement->fetchAll(PDO::FETCH_ASSOC);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>List Vinyls</title>
</head>
<body>
   <h1>List of Vinyls</h1>
   <ul>
      <?php foreach($vinylArray as $vinyl): ?>
      <h2><?= $vinyl['title']; ?></h2> 
      <img src="<?= $vinyl['cover']; ?>" width="250" height="250"> 
      <li>Artist: <?= $vinyl['artist'];?></li>
      <li>Genre: <?= $vinyl['genre'];  ?></li>
      <?php endforeach ?>
   </ul>
</body>
</html>