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
$genders = [
    'rock' => 'Rock',
    'classic' => 'Classique',
    'rap' => 'Rap',
    'jazz' => 'Jazz',
    'electro-' => 'Electro',
    'soundtrack' => 'Bande originale',
    'metal' => 'Metal',
    'disco' => 'Disco',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $addVinyl = array_map('trim', $_POST);

    $errors = [];
    if (empty($addVinyl['title'])) {
        $errors[] = 'Le titre est obligatoire';
    }
    $maxTitleLength = 200;
    if (strlen($addVinyl['title']) > $maxTitleLength) {
        $errors[] = 'Le titre ne doit pas depasser ' . $maxTitleLength . ' caractères';
    }
    if (empty($addVinyl['cover'])) {
        $errors[] = 'La couverture est obligatoire';
    }
    if (!filter_var($addVinyl['cover'], FILTER_VALIDATE_URL)) {
        $errors[] = 'Le lien fourni est incorrect';
    }
    $maxArtistLength = 200;
    if (strlen($addVinyl['artist']) > $maxArtistLength) {
        $errors[] = 'Le nom de l\'artiste ne doit pas depasser ' . $maxArtistLength . ' caractères';
    }
    if (empty($addVinyl['artist'])) {
        $errors[] = 'L\'artiste est obligatoire';
    }
    if (empty($addVinyl['gender'])) {
        $errors[] = 'Le genre est obligatoire';
    }
    if (empty($errors)) {
        $message = "Bravo, le nouveau vinyl a bien été transmis !";
        if ($addVinyl['gender'] === 'rap') {
            $message = "Merci de bien vouloir brûler ce vinyl et, s'il vous plait, n'utilisez plus cette plateforme.";
        }
    } else {
        $message = "Non, essayez encore";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau vinyl</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="titleAndForm">
        <h1>Ajoutez un vinyl</h1>

        <?php if (!empty($errors)) {  ?>
            <ul class="error">
                <?php foreach ($errors as $error) { ?>
                    <li><?php echo $error; ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
        <p class="rapMessage"><?php echo $message; ?></p>

        <form action="" method="POST" novalidate>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" required value="<?= $addVinyl['title'] ?? '' ?>">

            <label for="cover">Pochette</label>
            <input type="URL" name="cover" id="cover" required value="<?= $addVinyl['cover'] ?? '' ?>">

            <label for="artist">Artiste</label>
            <input type="text" name="artist" id="artist" required value="<?= $addVinyl['artist'] ?? '' ?>">


            <label for="gender">Choisir un genre:</label>
            <select name="gender" id="gender" required>
                <?php foreach ($genders as $genderKey => $genderValue) : ?>
                    <option value="<?= $genderKey ?>" <?php if (isset($addVinyl['gender']) && $addVinyl['gender'] === $genderKey) : ?> selected <?php endif; ?>>
                        <?= $genderValue ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Ajoutez</button>



        </form>
    </div>
</body>

</html>