<?php
$a= random_int(0, 50);
$b= random_int(0, 100);
//Affichage de a et b avant permutation
echo "la valeur de a est: {$a}<br>";
echo "la valeur de b est: {$b}<br>";

$c=$a;
$a=$b;
$b=$c;

//Affichage de a et b apres permutation
echo "la valeur de a est: {$a}<br>";
echo "la valeur de b est: {$b}<br>";