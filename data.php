<?php

  function randomLetter(){

    $alphabet = strtoupper('abcdefghijklmnopqrstuvwxyz');

    $letter = str_split($alphabet);

    $rand_keys = array_rand($letter, 3);

    $threeLetter = $letter[$rand_keys[0]] . $letter[$rand_keys[1]] . $letter[$rand_keys[2]];

    return $threeLetter;

  };

  $players = [];

  $a = 0;

  for ($i=0; $i < 100; $i++) {

    $randomNumber = rand(100,999);
    $code = $randomNumber . randomLetter();
    $rebounds = rand(0,20);
    $personalFoul = rand(0,9);
    $tiriDa2 = rand(20,30);
    $tiriDa3 = rand(18,25);

    $players [$a]["codiceGiocatore"] = $code;
    $players [$a]["rimbalzi"] = $rebounds;
    $players [$a]["falli"] = $personalFoul;
    $players [$a]["tiriDa2"] = $tiriDa2;
    $players [$a]["tiriDa3"] = $tiriDa3;

    $a++;

  };

?>
