<?php

/*
    1 - Créer une table vinyl en BDD : 
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

$query = "SELECT * FROM vinyl";
$statement = $pdo->query($query);
$vinyls = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Ajouter un nouveau vinyl</title>
</head>

<body>
   <a class="backButton topLeftButton" href="index.php">Retour</a>
   <h1 class="collectionTitle">Collection de vinyls</h1>
   <table>
      <thead>
         <tr>
            <th scope="col">Titre</th>
            <th scope="col">Cover</th>
            <th scope="col">Artiste</th>
            <th scope="col">Genre</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($vinyls as $vinyl) : ?>
            <tr>
               <td class="vinylTd"><?php echo htmlentities($vinyl['title']); ?></td>
               <td class="vinylTd"><img src="<?php echo htmlentities($vinyl['cover']); ?>" alt="Pochette d'album" /></td>
               <td class="vinylTd"><?php echo htmlentities($vinyl['artist']); ?></td>
               <td class="vinylTd"><?php echo htmlentities($vinyl['genre']); ?></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</body>