<?php
    $personne = ['nom'=>'Pierre', 'age'=>25, 'adresse'=>'09 Marc Séguin, Créteil'];
    $notes_assoc = [1=>1, 2=>10, 3=>8, 4=>15, 5=>10];
    $notes = [12,10,8,15,10];
    echo "<pre>";
    print_r($personne);
    echo "</pre>";
    echo "<pre>";
    var_dump($personne);
    echo "</pre>";
    //in_array(), in_array(10,$noms_assoc)
    if(in_array(2, $notes_assoc)){
        echo"La note est comprise dans le tableau";
    }else{
        echo"la note n'est pas comprise dans le tableau";
    }
    echo'<br/>';
    //array_key_exists(), array_key_exists(3, $notes_assoc)
    if(array_key_exists(10,$notes_assoc)){
        echo "La clé 3 est dans le tableau";
    }else{
        echo "La clé 10 n'est pas dans le tableau";
    }
    echo'<br/>';
    //sort($notes_assoc)
    sort($notes_assoc);
    //var_dump($notes_assoc);
    echo "<ul>";
    foreach($notes_assoc as $note_val){
        echo "<li>Note: $note_val</li>";
    }
    echo "</ul>";
    echo"**************";
    rsort($notes_assoc);
    echo "<ul>";
    foreach($notes_assoc as $note_val){
        echo "<li>Note: $note_val</li>";
    }
    echo "</ul>";
    ///array_search(8,$notes_array);
    $cle_elt_cherche = array_search(8,$notes_assoc);
    echo "La clé de l'élément cherché est $cle_elt_cherche";
    echo'<br/>';
    $data = "Pierre,25ans,Paris";
    //explode(Separateur,chaine)
    $data_tab = explode(",",$data);
    var_dump($data_tab);
    echo'<br/>';
    echo "<ul>";
    foreach($data_tab as $data_val){
        echo"<li>$data_val</li>";
    }
    echo "</ul>";
    $adresse_tab = ["numero"=>02, "rue"=>"Jean-Jacques","ville"=>"Paris"];
    //implode(separateur, tableau)
    $adresse_str = implode(", ",$adresse_tab);
    var_dump($adresse_str);
    echo "L'adresse est: $adresse_str";
    //array_push(tableau, val1, val2)
    array_push($notes,16,17);
    echo"<br/>";
    var_dump($notes);
    echo"<br/>";
    array_pop($notes);
    var_dump($notes);
    //array_rand(tableau)
    $key_al = array_rand($notes);
    echo'<br/>';
    var_dump($key_al);
    echo $notes[$key_al];
    ?>

    