<?php

echo "Les conditions ...";

echo "<br/>";
echo "<br/>";

$age = 20;

if ($age >= 21)
{
    echo "Tu es majeur";
}
else
{
    echo "Tu es mineur";
}

echo "<br/>";
echo "<br/>";

$ville = "Paris";

$pays = "France";

if($ville === 'Paris' && $pays === 'France')
{
    echo "Vous êtes bien en $pays à $ville";
}

echo "<br/>";
echo "<br/>";

if($ville === "Paris" || $pays === "USA")
{
    echo "Vive la France";
}

switch($pays)
{
    case 'Italie':
        echo "Mon pays est l'espagne";
        break;
}
?>