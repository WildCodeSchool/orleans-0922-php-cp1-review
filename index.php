<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <article class="vinylContainer">
                <h2>Titre</h2>
                <p>Artiste</p>
                <img src="assets/istockphoto-887280896-1024x1024.jpg" alt="vinyle">
            </article>
            <article class="vinylContainer">
                <h2>Titre</h2>
                <p>Artiste</p>
                <img src="assets/istockphoto-887280896-1024x1024.jpg" alt="vinyle">
            </article>
            <article class="vinylContainer">
                <h2>Titre</h2>
                <p>Artiste</p>
                <img src="assets/istockphoto-887280896-1024x1024.jpg" alt="vinyle">
            </article>
            <article class="vinylContainer">
                <h2>Titre</h2>
                <p>Artiste</p>
                <img src="assets/istockphoto-887280896-1024x1024.jpg" alt="vinyle">
            </article>
            <article class="vinylContainer">
                <h2>Titre</h2>
                <p>Artiste</p>
                <img src="assets/istockphoto-887280896-1024x1024.jpg" alt="vinyle">
            </article>
            <article class="vinylContainer">
                <h2>Titre</h2>
                <p>Artiste</p>
                <img src="assets/istockphoto-887280896-1024x1024.jpg" alt="vinyle">
            </article>
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
    <footer class="footer">
        <ul>
            <li>Team Member A, PowerRangerRouge@gmail.com, https://github.com/PRR </li>
            <li>Team Member B, Grodzilla@anonmail.com, https://github.com/Grozzi </li>
            <li>Team Member C, FoobarBanana@developper.com, https://github.com/Foobanana </li>
        </ul>
        <!--
        - Mobile : 
          - Ne doit pas apparaître.
        - Desktop :
          - Doit afficher, centrée sur la page, la liste des membres du groupe avec leur noms, emails et comptes GitHub.
    -->
    </footer>

</body>

</html>