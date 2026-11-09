<?php

function getBadgeCategorie($categorie)
{
    switch ($categorie) {
        case "ECO":
            return [
                "libelle" => "Économique",
                "classe" => "eco"
            ];

        case "SUV":
            return [
                "libelle" => "SUV",
                "classe" => "suv"
            ];

        case "premium":
            return [
                "libelle" => "premium",
                "classe" => "premium"
            ];

        default:
            return [
                "libelle" => "Autre",
                "classe" => "autre"
            ];
    }
}
function getLibelleStatut($statut)
{
    switch ($statut) {
        case "DISPO":
            return "Disponible";

        case "LOUEE":
            return "Louée";

        case "MAINTENANCE":
            return "En maintenance";

        default:
            return "Inconnu";
    }
}
?>