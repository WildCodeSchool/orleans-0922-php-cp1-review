<?php
/*
    1/ Créer un formulaire pour renseigner un nouveau vinyl : 
        - Titre => string de 200 caractères maximum - Obligatoire
        - Pochette => Url - Obligatoire
        - Artiste => string de 200 caractères maximum - Obligatoire
        - Genre => liste déroulante contenant les valeurs : Rock, Classique, Rap, Jazz, Electro, BO de film, Métal, Disco
        Le formulaire doit envoyer ces informations sur la même page.
    2/ Controle des données saisies : 
       - Vous devez afficher "Bravo, le nouveau vinyl a bien été transmis !" si les données correspondent bien aux critères ci-dessus.
       - Sinon, vous devez affichez "Non, essayez encore";
       - Et si le genre selectionné est "Rap" vous devez afficher "Merci de bien vouloir brûler ce vinyl et, s'il vous plait, n'utilisez plus cette plateforme."
*/

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    function sanitize($data)
    {
        $data = trim($data);
        $data = htmlentities($data);
        return $data;
    }
    $data = array_map('sanitize', $_POST);

    $validGenres = ['Rock', 'Classique', 'Rap', 'Jazz', 'Electro', 'BO de film', 'Métal', 'Disco'];

    if (!isset($data['title']) || empty($data['title']))
        $errors[] = "Le titre est obligatoire.";

    if (mb_strlen($data['title']) > 200)
        $errors[] = "Le titre ne doit pas dépasser 200 caractères.";

    if (!isset($data['cover']) || empty($data['cover']))
        $errors[] = "L'url de la pochette d'album est obligatoire.";

    if (!filter_var($data['cover'], FILTER_VALIDATE_URL))
        $errors[] = "L'url indiquée n'est pas valide.";

    if (!isset($data['artist']) || empty($data['artist']))
        $errors[] = "Le nom de l'artiste est obligatoire";

    if (mb_strlen($data['artist']) > 200)
        $errors[] = "Le nom de l'artiste ne doit pas dépasser 200 caractères";

    if (!isset($data['genre']) || ($data['artist'] === '')) {
        $errors[] = "Veuillez choisir un genre.";
    } else if (!in_array($data['genre'], $validGenres))
        $errors[] = "Le genre est invalide.";

    if (!empty($errors)) {
        echo "<h2>Veuillez réessayer :</h2>";
        foreach ($errors as $error)
            echo "<li>" . $error . "</li>";
    } else {
        echo "<h2>Le vinyl a bien été ajouté à votre collection";
        if ($data['genre'] === 'Disco') {
            echo ", mais merci de bien vouloir le brûler et ne plus utiliser notre plateforme !</h2>";
        } else {
            echo '.</h2>';
        }
    }
}
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
    <h1>Ajouter un nouveau vinyl</h1>
    <form class="vinylForm" action="" method="post">
        <div class="formField">
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="formField">
            <label for="cover">Pochette :</label>
            <input type="url" name="cover" id="cover">
        </div>
        <div class="formField">
            <label for="artist">Artiste :</label>
            <input type="text" name="artist" id="artist">
        </div>
        <div class="formField">
            <label for="genre">Genre :</label>
            <select name="genre" id="genre">
                <option value="">--Veuillez choisir un genre--</option>
                <option value="Rock">Rock</option>
                <option value="Classique">Classique</option>
                <option value="Rap">Rap</option>
                <option value="Jazz">Jazz</option>
                <option value="Electro">Electro</option>
                <option value="BO de film">BO de film</option>
                <option value="Métal">Métal</option>
                <option value="Disco">Disco</option>
            </select>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>