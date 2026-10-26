<?php
function moyenne(array $notes){
    print_r(array_sum($notes) / count($notes));
    echo"<br>";
     
}

function admis(array $notes){
    print_r(array_filter($notes, fn($note) => $note >= 10)) ;
     echo"<br>";
}

function sorting(array $notes){
    sort($notes);
    print_r($notes);
    echo"<br>";
}


function plus(array $notes){
    print_r (array_map(fn($note) => $note + 1, $notes));
}


?>
