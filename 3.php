<?php
function printWords($string) {
    $regexVocal = '/[^aeiouAEIOU]/';
    $vocal = preg_replace($regexVocal, '', $string);
    $hurufVocal = str_split($vocal);

    $regexKonsonant = '/[^bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/';
    $konsonant = preg_replace($regexKonsonant, '', $string);
    $hurufKonsonant = str_split($konsonant);

    foreach ($hurufVocal as $rowVocal) {
        echo $rowVocal . '<br />';
    }

    foreach ($hurufKonsonant as $rowKonsonant) {
        echo $rowKonsonant[0] . '<br />';
    }
}

echo printWords('ARKADEMY');