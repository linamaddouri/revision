<?php

function filtrerDisponibles($vehicules)
{
    $disponibles = [];

    foreach ($vehicules as $v) {
        if ($v["statut"] == "DISPO") {
            $disponibles[] = $v;
        }
    }

    return $disponibles;
}
?>