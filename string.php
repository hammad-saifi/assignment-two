<?php
declare(strict_types= 1);
$strings = ["Hello", "World", "PHP", "Programming"];
foreach ($strings as $string) {
    $revString = strrev($string);
    $str_len = strlen($string);
    $count = 0;
    for ($i = 0; $i < $str_len; $i++) {
        if  ($string[$i] == "a"){
            $count ++;
        }if ($string[$i] == "e"){
            $count ++;
        }if ($string[$i] == "i"){
            $count ++;
        }if ($string[$i] == "o") {
            $count ++;
        }if ($string[$i] == "u") {
            $count ++;
        }
    }
    printf("Original String: %s, Vowel Count: %s, Reversed String: %s\n",$string, $count, $revString);
}