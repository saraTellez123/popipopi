<?php
    echo"hola mundo!!!!!!!";
    echo "<br>";
    echo"hola mundo!!!!!!!";

    $nombre = "pepe";
    $apellido = "gome";
    echo"<br> hola ". $nombre ." ".$apellido;
    echo"<br>hola $nombre $apellido";
    $edad=25;
    $estatura = 1.75;
    $mayorEdad = true;//false
    $prueba = null;
    $prueba= [[],2.6,3, true,5,6,"a"];
    echo "br". $prueba[2];
    $persona =[
        "nombre"=> "pepe",
        "apellidp"=> "Gomez",
        "edad"=>30,
        "numerosSuerte"=>[20,12,6],
    ];
    echo "<br>". $persona ["nombre"];

?>