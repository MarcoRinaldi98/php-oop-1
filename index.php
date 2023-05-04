<?php

    require __DIR__ . '/Models/Movie.php';

    $generiFantozzi = ['Comico', 'Commedia'];
    $fantozzi = new Movie('Fantozzi', $generiFantozzi, 1975);

    $generiScream = ['Horror', 'Thriller'];
    $scream = new Movie('Scream', $generiScream, 1998);

    $generiTitanic = ['Drammatico', 'Sentimentale'];
    $titanic = new Movie('Titanic', $generiTitanic, 1997);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Tabella Film</title>
</head>
<body>
    <table class="mt-5 table container-sm border border-danger">
        <thead>
            <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Generi</th>
            <th scope="col">Anno</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $fantozzi->title; ?>
                </td>
                <td>
                    <?php echo $fantozzi->getAllGenres(); ?>
                </td>
                <td>
                    <?php echo $fantozzi->year; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $scream->title; ?>
                </td>
                <td>
                    <?php echo $scream->getAllGenres(); ?>
                </td>
                <td>
                    <?php echo $scream->year; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $titanic->title; ?>
                </td>
                <td>
                    <?php echo $titanic->getAllGenres(); ?>
                </td>
                <td>
                    <?php echo $titanic->year; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>