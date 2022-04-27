<?php
    echo ("<h1>Hello world venant de php!</h1>");
    #echo "<br/>";
    #echo "Dupond","Thomas";
    /*
    hjsdhjkdhvkvc
    skjckjejkce
    vehkjvjhehor
    cezekjcezkhjc
    */
    echo "<br/>";
    print("Le temps est beau.");
    echo "<br/>";

    // Ajout de html dans php

    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php</title>
    </head>
    <body>
        <h1>Etude du php</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit ipsum, animi fugit architecto, temporibus quaerat labore odit numquam magnam modi, non repellat error illo blanditiis vero laborum explicabo consectetur. Ratione!</p>
    </body>
    </html>
    ';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <h1>Etude2 du php</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        <i>
            <?php
                //Ajout du php dans html
                echo "Tout va bien!!!";

            ?>
        </i>
    Sit ipsum, animi fugit architecto, temporibus quaerat labore odit numquam magnam modi, non repellat error illo blanditiis vero laborum explicabo consectetur. Ratione!</p>
</body>
</html>