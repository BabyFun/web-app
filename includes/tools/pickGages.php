<?php

if (!function_exists('pickGages')) {
    function pickGages()
    {
        $gages = getGages();
        shuffle($gages);
        $choix1 = $gages[0];
        shuffle($gages);
        $choix2 = $gages[0];
        while ($choix2['nom'] == $choix1['nom'] or $choix2['bonus'] != $choix1['bonus']) {
            shuffle($gages);
            $choix2 = $gages[0];
        }
        $leschoix = array($choix1, $choix2);

        return $leschoix;

    }
}

?>
