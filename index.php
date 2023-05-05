<?php

    require_once __DIR__ . '/Models/Movie.php'; //require_once controlla se il file è già incluso, in caso non lo includerà di nuovo
    require_once __DIR__ . '/Models/Genre.php';
    require_once __DIR__ . '/Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link di collegamento al foglio di stile di bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- link di collegamento al mio foglio di style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- titolo della pagina -->
    <title>Tabella Film</title>
</head>
<body>
    <table class="mt-5 table container-sm border border-danger">
        <thead>
            <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Generi</th>
            <th scope="col">Anno</th>
            <th scope="col">Durata</th>
            <th scope="col">Locandina</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $starWars->title; ?>
                </td>
                <td>
                    <?php echo $starWars->getGenreList(); ?>
                </td>
                <td>
                    <?php echo $starWars->year; ?>
                </td>
                <td>
                    <?php echo $starWars->duration; ?>
                </td>
                <td>
                    <img class="img-thumbnail" src="<?php echo $starWars->poster; ?>" alt="immagine di <?php echo $starWars->title; ?>">             
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $matrix->title; ?>
                </td>
                <td>
                    <?php echo $matrix->getGenreList(); ?>
                </td>
                <td>
                    <?php echo $matrix->year; ?>
                </td>
                <td>
                    <?php echo $matrix->duration; ?>
                </td>
                <td>
                    <img class="img-thumbnail" src="<?php echo $matrix->poster; ?>" alt="immagine di <?php echo $matrix->title; ?>">             
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $fantozzi->title; ?>
                </td>
                <td>
                    <?php echo $fantozzi->getGenreList(); ?>
                </td>
                <td>
                    <?php echo $fantozzi->year; ?>
                </td>
                <td>
                    <?php echo $fantozzi->duration; ?>
                </td>
                <td>
                    <img class="img-thumbnail" src="<?php echo $fantozzi->poster; ?>" alt="immagine di <?php echo $fantozzi->title; ?>">             
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $scream->title; ?>
                </td>
                <td>
                    <?php echo $scream->getGenreList(); ?>
                </td>
                <td>
                    <?php echo $scream->year; ?>
                </td>
                <td>
                    <?php echo $scream->duration; ?>
                </td>
                <td>
                    <img class="img-thumbnail" src="<?php echo $scream->poster; ?>" alt="immagine di <?php echo $scream->title; ?>">             
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $titanic->title; ?>
                </td>
                <td>
                    <?php echo $titanic->getGenreList(); ?>
                </td>
                <td>
                    <?php echo $titanic->year; ?>
                </td>
                <td>
                    <?php echo $titanic->duration; ?>
                </td>
                <td>
                    <img class="img-thumbnail" src="<?php echo $titanic->poster; ?>" alt="immagine di <?php echo $titanic->title; ?>">             
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>