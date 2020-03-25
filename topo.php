<?php

$landen = ["japan" => "tokyo", "mexico" => "mexico city", "usa" => "washington D.C.", "india" => "new delhi", 
"zuid-korea" => "seoul", "china" => "peking", "nigeria" => "abuja", "argentina" => "buenos aires", "egypt" => "cairo", 
"uk" => "london"];

$j = 0;
foreach ($landen as $land => $stad) { 
    echo "Wat is de hoofdstad van " .$land. "?" . PHP_EOL;
    $antwoord = readline("");
    if ($antwoord === $stad) {
    echo "correct!" . PHP_EOL;
    $j++;
    }else{
    echo "Incorrect!" . PHP_EOL; 
    echo "Het correcte antwoord was: ". $stad . PHP_EOL;
    } 
}   
echo $j . " van de 10 goed!";