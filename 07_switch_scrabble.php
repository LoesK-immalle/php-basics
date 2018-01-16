<?php

$woord = "quotering";
$punten = 0;

// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt

$letters = str_split($woord);
foreach($letters as $value){
	switch ($value){
		case "q":
		  $punten += 10;
		  break;
		case "u":
		  $punten += 4;
		  break;
		case "o":
		  $punten +=1;
		  break;
		case "t":
		  $punten += 2;
		  break;
		case "e":
		  $punten += 1;
		  break;
		case "r":
		  $punten +=2;
		  break;
		case "i":
		  $punten += 10;
		  break;
		case "n":
		  $punten += 4;
		  break;
		default:
		  break;
	}
}
echo $punten;
?>
