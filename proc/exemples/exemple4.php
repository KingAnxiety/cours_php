<?php

/*
    for(etat_initial;condition; incrément){
        instructions ...
    }
    $i++ post inrement
    ++$i pre increment
    $i-- post decement
    --$i pre decrement
    $i = $i + 2
*/

for($i = 0; $i < 6; $i++){
    echo "Bonjour Mr N°".($i + 1)."<br/>";
}
echo "<ol>";
for($i = 0; $i < 6; $i++){
    echo "<li>Bonjour Mr ...</li>";
}
echo "</ol>";

for($i = 0; $i < 6; $i++){
    echo "Bonjour Mr N°".($i + 1)."<br/>";
    if($i == 2){
        break;
    }
}
echo'<br/>';
for($i = 0; $i < 6; $i++){
    if($i == 2){
        continue;
    }
    echo "Bonjour Mr N°".($i + 1)."<br/>";
}
/**
 * etat_initial
 * while(condition){
 * instructions ...
 * increment
 * }
 */
$j = 10;
while($j < 10){
    echo "N° $j <br/>";
    $j++;
}
echo'<br/>';
$a = 10;
do {
    echo "N° $a <br/>";
    $a++;
} while ($a < 10);
echo "<br/>";
//Boucle imbriquée
// for ($i=1; $i <= 12 ; $i++) { 
//  echo "Stagiaire de Numéro $i";
//  echo "<ul>";
//  for($j = 1; $j <= 3; $j++){
//     echo"<li> Dossier N° $j </li>";
//  }
//  echo "</ul>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle imbriquée</title>
</head>
<body>
    <h1>Dossiers stagiaires</h1>
    <?php for($i = 1; $i <= 12; $i++){ ?>
        <div>
            Stagiaire de Numéro <?php echo $i; ?>
            <ul>
                <?php for($j = 1; $j <= 3; $j++){ ?>
                <li>Dossier <?php echo $j; ?></li>
                <?php } ?>
            </ul>
        <div>
    <?php } ?>
</body>
</html>