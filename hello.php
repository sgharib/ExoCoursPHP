<?php
echo '<p>' . 'Bonjour ' . $_GET['firstname']. ' ' .$_GET['surname'] . '</p>';
echo '<h1>Bonjour Ã  tous. C\'est le premier script PHP, fichier hello.php dans c:/MAMP/htdocs</h1>';
// La fonction array permet de créer un array
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
for($i=0; $i<= 4;$i++){
    echo $prenoms[$i];
 
}
// On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo $coordonnees['ville'];
$coordonnees['prenom'] = 'François';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Marseille';
echo $coordonnees['adresse'];

// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as  $cle => $element)
{
    echo $element . '<br />';
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé <strong>"nom"</strong> se trouve dans les coordonnées !'. '<br/>';
}

if (array_key_exists('ville', $coordonnees))
{
    echo 'La clé <strong>"ville"</strong> se trouve dans les coordonnées !'. '<br/>';
}

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Banane', $fruits))
{
    echo 'La valeur <strong>"Banane"</strong> se trouve dans les fruits !'.' <br/>';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur <strong>"Cerise"</strong> se trouve dans les fruits !'. '<br/>';
}

$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);
 
echo $chaine;

function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('François');
DireBonjour('Benoît');
DireBonjour('Père Noël');

// Ci-dessous, la fonction qui calcule le volume du cône
function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur à renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;