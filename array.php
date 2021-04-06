<?php

$movie [0] = "shoalin master";
$movie [1]="drunken master";
$movie [2]="american ninja";
$movie [3]="killers";
echo  $movie[2];
$movie[2] =    "  christopher's";
echo $movie[2];

$person = array("mary" => "female", "john" => "male");
print_r($person);
echo " " ;
echo "mary is a " . $person["mary"];

$movies=array(
	"action" => array("nyc" , "kgf "),
	"comedy" => array("brooklyn99" ," boss"));
print_r($movies);


?>
