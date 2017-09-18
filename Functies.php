<?php
	include("Header.php");

$a = 100;	
	
Function celsius_to_fahrenheit($a) {
	$b = ($a * 9/5) + 32;
	
	echo "{$a} Celsius is {$b} fahrenheit";
	
}

celsius_to_fahrenheit($a);

echo "<br>";
	
Function divide() {
	$a = 9;
	if($a % 3 == 0) {
		$check = true;
	}
	else {
		$check = false;
	}
	return $check;

}
if(divide()) {
	
	echo "Getal is deelbaar door 3";
}
	else {
		echo "Het getal is niet deelbaar door 3";
	}
divide();	

echo "<br>";

Function reversed_string() {
	$returned = "Dit is een omgekeerde string";
	echo strrev ("$returned");
	
	return $returned;
}

reversed_string();
include("Footer.php");
?>
