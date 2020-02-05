<?php
    $geld = doubleval($argv[1]);
    $geld = (round($geld*2, 1)/2);
    $munten = [
        "50 euro"=>0,
        "20 euro"=>0,
        "10 euro"=>0,
        "5 euro"=>0,
        "2 euro"=>0,
        "1 euro"=>0,
        "0.5 cent"=>0,
        "0.2 cent"=>0,
        "0.1 cent"=>0,
        "0.05 cent"=>0
    ];
    if($geld > 0) {
        foreach($munten as $munt=>$val){
            $waarde = explode(" ", $munt);
            $munten[$munt] = (int)floor($geld/$waarde[0]);
            $geld = fmod($geld, $waarde[0]);
        }
        foreach($munten as $munt=>$val) {
            if($val !== 0) echo($val." X ".$munt.PHP_EOL);
        }
    }else {
        echo("Geen wisselgeld");
    }
?>