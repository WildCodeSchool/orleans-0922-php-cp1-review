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

$query = "SELECT * FROM vinyls";
$statement = $pdo->query($query);
$vinyls = $statement->fetchAll();

?>
<a href="index.php">Retour</a>
<table>
   <caption>Collection de vinyls</caption>
   <thead>
      <tr>
         <th scope="col">Titre</th>
         <th scope="col">Cover</th>
         <th scope="col">Artiste</th>
         <th scope="col">Genre</th>
      </tr>
   </thead>
   <tbody>
      <?php foreach ($vinyls as $v) : ?>
         <tr>
            <td><?php echo $v['title']; ?></td>
            <td><img src="<?php echo $v['cover']; ?>" alt="Pochette d'album" /></td>
            <td><?php echo $v['artist']; ?></td>
            <td><?php echo $v['genre']; ?></td>
         </tr>
      <?php endforeach; ?>
   </tbody>
</table>