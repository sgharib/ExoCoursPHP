<?php
echo '<p>' . 'Bonjour ' . $_GET['firstname']. ' ' .$_GET['surname'] . '</p>';
echo '<h1>Bonjour à tous. C\'est le premier script PHP, fichier hello.php dans c:/MAMP/htdocs</h1>';
// La fonction array permet de cr�er un array
$prenoms = array ('Fran�ois', 'Michel', 'Nicole', 'V�ronique', 'Beno�t');
for($i=0; $i<= 4;$i++){
    echo $prenoms[$i];
 
}
// On cr�e notre array $coordonnees
$coordonnees = array (
    'prenom' => 'Fran�ois',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo $coordonnees['ville'];
$coordonnees['prenom'] = 'Fran�ois';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Marseille';
echo $coordonnees['adresse'];

// On cr�e notre array $prenoms
$prenoms = array ('Fran�ois', 'Michel', 'Nicole', 'V�ronique', 'Beno�t');

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}

$coordonnees = array (
    'prenom' => 'Fran�ois',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as  $cle => $element)
{
    echo $element . '<br />';
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

$coordonnees = array (
    'prenom' => 'Fran�ois',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La cl� <strong>"nom"</strong> se trouve dans les coordonn�es !'. '<br/>';
}

if (array_key_exists('ville', $coordonnees))
{
    echo 'La cl� <strong>"ville"</strong> se trouve dans les coordonn�es !'. '<br/>';
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

$chaine = 'Cette cha�ne va �tre m�lang�e !';
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
DireBonjour('Fran�ois');
DireBonjour('Beno�t');
DireBonjour('P�re No�l');

// Ci-dessous, la fonction qui calcule le volume du c�ne
function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur � renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un c�ne de rayon 3 et de hauteur 1 est de ' . $volume;