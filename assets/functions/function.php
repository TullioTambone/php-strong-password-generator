<?php

$lunghezzaPassword = $_GET['lunghezzaPassword'];
function passwordGenerator($lunghezzaPassword){
    $myPassword = '';
    $smallLetters = 'abcdefghijklmnopqrstuvwxyz';
    $upperLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialLetters = '!@#$%^&*';
    $all = $smallLetters . $upperLetters . $numbers . $specialLetters;
    $contPass = strlen($all);
    $myPassword = substr(str_shuffle($all), 0, $lunghezzaPassword);

    return $myPassword;
};