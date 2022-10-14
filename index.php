<?php
require "_env.php";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ma collection de vinyls !</title>
</head>

<body>
    <header class="header">
        <h1 class="headerTitle">Ma collection de vinyls</h1>
        <figcaption><cite>One good thing about music, when it hits you, you feel no pain.</cite> — Bob Marley</figcaption>
        <!--
        - Mobile : 
            - Doit contenir un titre "Ma collection de vinyls" en Arial de 28px calé sur la gauche.
            - Tout le header doit avoir un background noir et la police doit être orange.
        - Desktop:
            - Le titre doit se centrer sur la page.
            - Juste en dessous doit apparaître une citation sur la musique.
            - Le background doit devenir une photo de vinyl et la police doit repasser en blanc
                et en Silkscreen (https://fonts.google.com/specimen/Silkscreen)
    -->
    </header>
    <div class="container">
        <nav class="navbar">
            <ul>
                <li><a href='index.php'>Accueil</a></li>
                <li><a href='create.php'>Ajouter un vinyl</a></li>
            </ul>
            <!--
        - Mobile : 
           - la liste (ul) des liens s'affiche en colonne :
                - Accueil (index.php)
                - Ajouter (create.php)
        
        - Desktop : 
            - Affichez la liste des liens calée à droite de la page.
    -->
        </nav>
        <main>
            <div class="vinylsList">
                <?php foreach ($vinyls as $vinyl) : ?>
                    <article class="vinylContainer">
                        <h2><?php echo htmlentities($vinyl['title']); ?></h2>
                        <p><?php echo htmlentities($vinyl['artist']); ?></p>
                        <div><img src="<?php echo htmlentities($vinyl['cover']); ?>" alt="Pochette d'album" /></div>
                    </article>
                <?php endforeach; ?>
            </div>
            <!--
        - Mobile : 
           - Présenter dans un cadre un vinyl avec son titre, sa pochette, 
                et le nom de l'artiste
           - Présenter au moins 6 vinyls sur la page.
        
        - Desktop : 
          - Afficher les mêmes cadres, mais avec cette fois trois sur la même ligne.
    -->
        </main>
    </div>
    <footer class="footer">
        <?php
        $members = [
            [
                'name' => 'Team Member A',
                'mail' => 'CoderRangerRouge@gmail.com',
                'githubLink' => 'https://github.com/',
            ],
            [
                'name' => 'Team Member B',
                'mail' => 'GillBates@sicromoft.com',
                'githubLink' => 'https://github.com/',
            ],
            [
                'name' => 'Team Member C',
                'mail' => 'Foobar@developper.com',
                'githubLink' => 'https://github.com/',
            ]
        ];
        foreach ($members as $member) {
            echo '<div class="teamMember"><a href="' . $member['githubLink'] . '"><img class="logo" src="./assets/GitHub_Logo.png" alt="Logo GitHub" /></a>';
            echo '<div><p><b>' . $member['name'] . '</b></p>';
            echo '<p>' . $member['mail'] . '</p></div></div>';
        }
        ?>
        <!--
        - Mobile : 
          - Ne doit pas apparaître.
        - Desktop :
          - Doit afficher, centrée sur la page, la liste des membres du groupe avec leur noms, emails et comptes GitHub.
    -->
    </footer>
</body>

</html>