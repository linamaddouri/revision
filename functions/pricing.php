<?php
function calculerPrixLocation(int $j, float $t): float
{
    $total = $j * $t;

    if ($j > 7) {
        $total = $total * 0.85;
    }

    return $total;
}
?>
