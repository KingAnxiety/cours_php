<?php
    $nom_variable = 'toto';
    /*types scalaires ou primitifs
    -integer: -3,-2,-1,0,1,2,3
    -float: -4.5, 10.2
    -string: 'toto', "Dupond"
    -boolean: true, false, 1,0
    
    types composés
    -tableau: 
    -objet

    */

    $nom = "Thomas";
    echo $nom;
    echo "<br/>";
    echo gettype($nom);
    $nom  = 5;
    echo "<br/>";
    echo gettype($nom);
    $nom = 'Je m\'appelle Durand';
    $prenom = 'Simon';
    echo "<br/>";
    echo "\$prenom = 'Simon'";
    echo "<br/>";
    echo $prenom[0];
 //Concatenation
 echo "<br/>";
 echo "Hello ","world!";
 echo "<br/>";
 echo "Vous vous appelez: ".$prenom;
 echo "<br/>";
 echo "Vous vous appelez $prenom";

 $a = 5;
 $b = 7;
 $ad = $a + $b;
 $s = $a - $b;
 $m = $a * $b;
 $d = $a / $b;
 $mod = $a % $b;

 $test = true;
 echo "<br/>";
 echo "Le test a pour valeur: $test";
//Transtypage;
$nombre = 15.67;
$nombre_entier = (int)$nombre;
$prix1 = "25";
$prix2 = "12";
echo gettype($prix1);
$prix1 = (int)$prix1;
$prix2 = (int)$prix2;
$somme = $prix1 + $prix2;
echo "<br/> $nombre_entier";
echo "<br/>";
echo $somme;

//Constantes define(nom_constante,valeur_constante);
define('PI', 22/7);
echo "<br/>";
echo round(PI);

const MODULE = "Php";
echo "<br/>";
echo MODULE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Opération</title>
</head>
<body class="container">

    <h1>Arithmétiques</h1>
    <table class="table table-striped">
        <tr>
            <th>Nombre1/Nombre2</th>
            <th>Opérations</th>
            <th>Résultat</th>
        </tr>
        <tr>
            <th>Addition</th>
            <td>Nombre1 + Nombre2</td>
            <td><?php echo $ad; ?></td>
        </tr>
        <tr>
            <th>Soustration</th>
            <td>Nombre1 - Nombre2</td>
            <td><?php echo $s; ?></td>
        </tr>
        <tr>
            <th>Multiplication</th>
            <td>Nombre1 x Nombre2</td>
            <td><?php echo $m; ?></td>
        </tr>
        <tr>
            <th>Division</th>
            <td>Nombre1 / Nombre2</td>
            <td><?php echo $d; ?></td>
        </tr>
        <tr>
            <th>Modulo</th>
            <td>Nombre1 mod Nombre2</td>
            <td><?php echo $mod; ?></td>
        </tr>
    </table>
</body>
</html>