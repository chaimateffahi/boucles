
    <?php
$notes = ["mohamed" =>14, "sami" => 9,"amal"=>17,"yassine"=>8,"ines"=>12];
foreach ($notes  as $nom => $note) {
  echo "$nom : $note <br>";
}

$moyenne=array_sum($notes)/count($notes);
echo " la moyenne est $moyenne <br>";

$admis=array_filter($notes, fn($note) => $note >=10);
print_r($admis);

echo "l'ordre de tableau est :";
$tri=sort($notes);
print_r($tri);
?>