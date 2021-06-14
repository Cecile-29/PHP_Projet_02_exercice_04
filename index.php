<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet02 Exercice04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet02 Exercice04</h1>
            <p class="col-12 text-info text-center">Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15.</p>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
            <!-- <?php
                // $i = 1;
                // echo "La variable i initialisée à 1 sera incrémentée d'un pas de 15 <p class='row col-12 text-center'>";
                // while ($i <= 100) {
                //     $i += 15;
                //     echo'valeur de "i" <h4 class=" col-7 m-2">'. ' <h4 class="m-2">'. ($i);
                // }
            ?> -->

            <?php
                $i = 0;
                ?>
                <p class='row col-12 text-center'>"La variable i initialisée à 1 sera incrémentée d'un pas de 15 </p>
            <?php
                while ($i <= 100) {
                    $i += 15;
                ?>
                <h2 class="border border-warning m-2">valeur de "i" au tour de boucle N° : <span><?= ($i / 15) ?></span></h2>
                <h2 class="m-2">est <span><?= $i ?></span></h2>
                <?php
                }
            ?> 
        </div>
    </div>
</body>
</html>