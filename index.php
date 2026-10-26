<?php
require_once"config.php";
require_once"fonctions.php";
$notes = ["mohamed" =>14, "sami" => 9,"amal"=>17,"yassine"=>8,"ines"=>12];
echo"la moyenne de la classe est :";
moyenne( $notes) ;
echo"les personnes qui sont admis:";
admis( $notes);
echo"le tri est:";
sorting( $notes);
echo"le bonus :";
plus( $notes);
