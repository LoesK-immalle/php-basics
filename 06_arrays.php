<?php

// Maak een Array met 3 namen van medeleerlingen.
$classmates = array("Mathias", "Liam", "Wout");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.
echo "<ul>";
for($i = 0; $i < count($classmates); $i++) {
	echo "<li>";
	echo $classmates[$i];
	echo "</li>";
}
echo "</ul>";
// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.
echo "<ol>";
foreach($classmate as $value) {
	echo "<li>";
	echo $classmates[$value];
	echo "</li>";
}
echo "</ol>";
$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.

?>
