<?php
function is_name_valid($string) {
    $regex = '/^[[:upper:]]{3,}$/';
    preg_match($regex, $string, $match);

    if ($match == true) {
        return true;
    } else {
        return false;
    }
}

function is_age_valid($string) {
    $regex = '/^\d{2}$/';
    preg_match($regex, $string, $match);

    if ($match == true) {
        return true;
    } else {
        return false;
    }
}

function is_username_valid($string) {
    $regex = '/^[[:lower:]]{4}[_.]+\d{3}$/';
    preg_match($regex, $string, $match);
    
    if ($match == true) {
        return true;
    } else {
        return false;
    }
}

echo is_name_valid('TIARA') . '<br />';
echo is_age_valid(21) . '<br />';
echo is_username_valid('yani_333') . '<br />';
echo is_username_valid('dian.11');