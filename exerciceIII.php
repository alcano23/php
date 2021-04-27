<?php
$xA= random_int(-50, 50);
$yA= random_int(-50, 50);
$xB= random_int(-50, 50);
$yB= random_int(-50, 50);
echo "les coordonnées de A sont: ({$xA};{$yA}) et les coodonnées de B sont : ({$xB};{$yB})<br>";
$dist = sqrt(pow($xB-$xA,2)+pow($yB-$yA,2));

echo "la distance entre les deux points est {$dist}";