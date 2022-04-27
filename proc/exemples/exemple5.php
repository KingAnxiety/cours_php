<?php

$noms = array('Dupond','Durand','Thomas','Antoine','Simone');
echo $noms[2];
$noms[3]='Pierre';
echo"<br/>";
echo $noms[3];
//$notes = array();
// $notes[0]=12;
// $notes[1]=10;
// $notes[2]=8;
// $notes[3]=15;
// $notes[]=12;
// $notes[]=10;
// $notes[]=8;
// $notes[]=15;
$notes = [12,10,8,15,10];
echo"<br/>";
echo $notes[2];
echo"<br/>";
//Tableaux associatifs ['cle1'=>'val1','cle2'=>'val2','cle3'=>'val3']
$notes_assoc = [1=>1, 2=>10, 3=>8, 4=>15, 5=>10];
echo $notes_assoc[5];
echo"<br/>";
$noms_assoc = ['A'=>'Dupond', 'B'=>'Durand', 'C'=>'Thomas','D'=>'Antoine', 'E'=>'Simone'];
$noms_assoc['D']='Cathérine';
echo $noms_assoc['D'];
echo"<br/>";
const FEU_TRICOLORS = ['Rouge','Orange', 'Verte'];
echo FEU_TRICOLORS[2];
echo "<br/>";
echo sizeof($noms);
echo "****<br/>";
foreach($notes as $note_val){
    echo "$note_val <br/>";
}
echo "****<br/>";
foreach($noms_assoc as $nom_val){
    echo "$nom_val <br/>";
}
echo "****<br/>";
foreach($noms_assoc as $nom_key => $nom_val){
    echo "La clé $nom_key a pour valeur: $nom_val <br/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>
<body>
    <h1>Tableaux</h1>
    <ol>
        <?php for($i = 0; $i < count($noms); $i++){ ?>
            <li><?php echo $noms[$i]; ?></li>
        <?php } ?>
    </ol>
    
</body>
</html>