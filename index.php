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
    $numeros = [1,2,3,4,5,6,7,8,9,10,11,12];
    
/*
    for($i = 0; $i<=11;$i++){
            $parOImpar ="";
            if(($numeros[$i]%2)==0){
                $parOImpar= "Par";

            }else{
                 $parOImpar = "Impar";
        }
        echo "<br>$numeros[$i] es $parOImpar";
    }

*/
if($numeros[0]==0 && $numeros[0]<10){
    //
}elseif($numeros[0]==10||$numeros[0]<20){
    //
}elseif(!($numeros==20 && $numeros[0]<=30)){
    //
}else{

}

$catg = "a";
    switch($catg){
        case "a":
            //
            break;
        case "b":
            //
            break;
        case "c":
            ///
            break;
        default:
        //
        break; 
    }
function saludar($nombre){
    echo "hola $nombre";
}

saludar("pepe");

function getSaludo($nombre){
    return "<br>Hola $nombre";
}
echo getSaludo("Ana");

function saludarDos(String $nombre, $apellido){
    echo "<br>Hola $nombre $apellido";
}
saludarDos("pepe","gomez");

function saludarTres($nombre, $apellido=null)
{
    echo"<br>Hola $nombre $apellido";
}
function saludarCuatro(...$args){
    $nombre = $args[0];
    $apellido= empty($args[1])?" ":$args [1];

}
saludarCuatro("pedro");
saludarCuatro("pedro","Picapiedra");
saludarCuatro("pedro","picapiedra",40);

define("ELPAPUPRO","EEE");
echo ELPAPUPRO;

class Persona{
    private $nombre = null;
    private $apellido;
    function getNombre(){
        return $this -> nombre;
    }
    function setNombre($val){
        $this->nombre=$val;
    }

}
$persona = new Persona();

$persona -> setNombre("Pablo");
echo "<br>".$persona->getNombre();




?>