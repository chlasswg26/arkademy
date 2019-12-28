<?php
function sortNumber($string) {
    $string = str_split($string);
    sort($string);
    $regexString = '/\d/';
    $implodeString = implode('', $string);
    preg_match($regexString, $implodeString, $match);

    if ($match == true) {
        $regexDigit = '/[^\d]/';
        $digit = preg_replace($regexDigit, '', $implodeString);
        return $digit;
    } else {
        return 'No number found in parameter!';
    }
}

echo sortNumber('48172a94') . '<br />';
echo sortNumber('abc') . '<br />';
echo sortNumber('94a');