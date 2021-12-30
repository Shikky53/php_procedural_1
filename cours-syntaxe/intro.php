<?php 

$prenom = 'Neku';

echo 'Shiki et ' . $prenom;

echo "<br/>";

echo "Joshua et {$prenom}";

echo "<br/>";

echo 'Hello $prenom';

$ville = 'Paris';

$Population = 2;

echo "<br/>";

echo "<br/>";

echo "Il y a à {$ville} , {$Population} millions d'habitants.";


echo "<hr/>";

$tabTwewy = [
    "Neku",
    "Beat",
    "Minamimoto"
];

$tab = [
    'Rindo' => "Le Héros",
    'Fret' => "Le meilleur ami",
    'Nagi' => "Le cerveau de l'équipe",
    'Shoka' => "Une reaper"
];

foreach($tabTwewy as $value) {
    echo "<pre>";
    echo $value;
    echo "<pre/>";
}

echo "<hr/>";

foreach($tab as $key => $value) {
    echo "<pre>";
    echo "$key est $value";
    echo "<pre/>";
}

?>