<?php
/*
if(condition){
    instructions ....
}else{
    instructions ...
}
*/

$permis = false;
if($permis){
    echo "Je peux conduire une voiture";
}else{
    echo "Interdiction de conduire une voiture";
}
/*Comparaison 2, "2"
Egalité (===)
Différent !=
Stricte infériorité (<) : 2 < 5
Inférieur ou éagle (<=): $b <= 7
Stricte supériorité (>): 9 > 4
Supérieur ou égale (>=): 10 >= 7
*/
echo "<br/>";
$nom = "Peter";
if($nom === "Simon"){
    echo "Nous vous attendons";
}else{
    echo "Vous n'êtes pas celui qu'on attend";
}
echo "<br/>";
$feu = "Verte";
// if($feu == "Rouge"){
//     echo "Veuillez vous arrêter";
// }elseif ($feu == "Orange") {
//     echo "Faîtes attention";
// }elseif ($feu == "Verte") {
//     echo "Vous pouvez passer";
// }else{
//     echo "Priorité à droite";
// }
echo "<br/>";
$genre = "h"; $age = 25;
if($genre == "f"){
    if($age >= 18){
        echo "Entrez 1.5€";
    }else{
        echo "Accès libre";
    }
}elseif($genre == "h") {
    if($age >=18 ){
        echo "Entrez 2€";
    }else{
        echo "Entrez 1€";
    }
}
switch ($feu) {
    case 'Rouge':
        echo "Veuillez vous arrêter";
        break;
    case 'Orange':
        echo 'Faîtes attention';
        break;
    case 'Verte':
        echo 'Vous pouvez passer';
        break;
    default:
        echo "Priorité à droite";
        break;
}

$bac = true;
echo ($bac ? "Je vais à l'université":"Je reprends la terminale");
?>