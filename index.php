<?php
require_once "config/settings.php";
require_once "functions/pricing.php";
require_once "functions/labels.php";
require_once "functions/filters.php";
$vehicules = [
    [
        "id" => 1,
        "modele" => "Renault Clio",
        "jours" => 3,
        "categorie" => "ECO",
        "statut" => "DISPO"
    ],
    [
        "id" => 2,
        "modele" => "Range Rover",
        "jours" => 10,
        "categorie" => "LUXE",
        "statut" => "LOUEE"
    ],
    [
        "id" => 3,
        "modele" => "Dacia Duster",
        "jours" => 5,
        "categorie" => "SUV",
        "statut" => "DISPO"
    ],
    [
        "id" => 4,
        "modele" => "Peugeot 208",
        "jours" => 8,
        "categorie" => "ECO",
        "statut" => "MAINTENANCE"
    ],
    [
        "id" => 5,
        "modele" => "Mercedes Classe E",
        "jours" => 2,
        "categorie" => "premium",
        "statut" => "DISPO"
    ]
];
$disponibles = filtrerDisponibles($vehicules);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>AutoLoc</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

<div class="container">

    <h1>Flotte AutoLoc</h1>
    <div class="cards">
        <?php foreach ($vehicules as $v): ?>
            <?php
                $badge = getBadgeCategorie($v["categorie"]);
                $libelle = getLibelleStatut($v["statut"]);
                $prix = calculerPrixLocation(
                    $v["jours"],
                   TARIF_JOUR_BASE
                );
            ?>
            <div class="card">

                <h3>
                    <?= $v["modele"] ?>
                    (<?= $v["jours"] ?> j)
                </h3>
                <span class="badge <?= $badge["classe"] ?>">
                    <?= $badge["libelle"] ?>
                </span>
                <p>
                    Statut :
                    <span class="<?= strtolower($v["statut"]) ?>">
                        <?= $libelle ?>
                    </span>
                </p>
                <p>
                    Prix estimé :
                    <strong><?= number_format($prix, 0) ?> TND</strong>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
    <h2>Récapitulatif</h2>
    <p>
        Nombre total de véhicules :
        <strong><?= count($vehicules) ?></strong>
    </p>
    <h3>Véhicules disponibles :</h3>
    <ul>
        <?php foreach ($disponibles as $v): ?>
            <li>
                <?= $v["modele"] ?> -
                <?= getBadgeCategorie($v["categorie"])["libelle"] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
