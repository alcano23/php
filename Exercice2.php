<?php
$a= random_int(0, 50);
$b= random_int(0, 100);
$c= random_int(0, 50);
$crois=sort($a,$b,$c);

echo "ordre croissant : {$crois}";