<?php

$lunghezzaPassword = $_GET['lunghezzaPassword'];
$lettersCheck = $_GET['letters'];
$numbersCheck = $_GET['numbers'];
$simbolsCheck = $_GET['simbols'];
$multiLetters = $_GET['RepeatLetters'];

function passwordGenerator($lunghezzaPassword, $lettersCheck, $numbersCheck, $simbolsCheck, $multiLetters){
    $myPassword = '';
    $smallLetters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $bigLetters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $specialLetters = ["!", "?", "%", "$", "&", "*", "-", "+", "/"];

    $all = [];
    
    if( $lettersCheck == 'on' ){
        $all = array_merge($all, $smallLetters, $bigLetters);
    }
    
    if( $numbersCheck == 'on'){
        $all = array_merge($all, $numbers);
    }
    
    if( $simbolsCheck == 'on'){
        $all = array_merge($all, $specialLetters);
    }
    
    
    if ($multiLetters == 'yes') {
        for ($i=0; $i < $lunghezzaPassword; $i++) { 
            $random = rand(0, count($all));
            $myPassword .= $all[$random];
        }
        
    } else{
        for ($i=0; $i < $lunghezzaPassword; $i++) { 
            $random = rand(0, count($all));

            if (!str_contains($myPassword, $all[$random])) {
                $myPassword .= $all[$random];
                
            } else {
                $i--;
            }
        };
    }

    return $myPassword;
};