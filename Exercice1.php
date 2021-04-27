<?php
$a= random_int(0, 50);
$b= random_int(0, 100);
echo "valeur de a :{$a}<br>";
echo "valeur de b :{$b}<br>";
if ($a<$b){
    echo "odre croissant {$a} {$b}<br>";
    echo "ordre décroissant {$b} {$a}<br>";
}
else{
    echo "odre croissant {$b} {$a}<br>";
    echo "ordre décroissant {$a} {$b}<br>";
}