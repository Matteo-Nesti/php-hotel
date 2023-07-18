<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <h1 class="text-center my-5">hotels</h1>

    <!-- lista primo push-->

    <!-- <ul>
        <?php foreach ($hotels as $hotel) { ?>
            <li>
                <?= $hotel['name'] ?>
            </li>

            <li>
                <?= $hotel['description'] ?>
            </li>

            <li>
                <?= $hotel['parking'] ?>
            </li>

            <li>
                <?= $hotel['vote'] ?>
            </li>

            <li>
                <?= $hotel['distance_to_center'] ?>
            </li>
        <?php } ?>
    </ul> -->
    <div class="container">

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal Centro</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <td>
                            <?= $hotel['name'] ?>
                        </td>
                        <td>
                            <?= $hotel['description'] ?>
                        </td>
                        <td>
                            <?= $hotel['parking'] === false ? '&#10060;' : '&#10004;' ?>
                        </td>
                        <td>
                            <?= $hotel['vote'] ?> / 5
                        </td>
                        <td>
                            <?= $hotel['distance_to_center'] ?> Km
                        </td>
                    </tr>

                <?php } ?>
            </tbody>

        </table>
    </div>

</body>

</html>