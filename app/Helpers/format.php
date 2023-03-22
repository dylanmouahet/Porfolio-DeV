<?php

use Carbon\Carbon;

function formatDateForHuman($date)
{
    Carbon::setLocale('fr');
    return Carbon::parse($date)->diffForHumans();
}

function reduceText($texte, $longueur_max = 100){
    if (strlen($texte) > $longueur_max) {
        $texte = substr($texte, 0, $longueur_max) . "...";
    }

    return $texte;
}
