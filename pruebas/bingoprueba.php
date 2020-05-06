<?php

//llamada a la funcion que nos crea un array con 60 numeros
$arrayBola=bolasCaja();

// con esta funcion llamamos al array  y sacamos una vola
tirada($arrayBola);

// verNuevoArray($tirada);

jugadores();



// function verNuevoArray($parametroArray){

//     foreach($parametroArray as $indice=>$valor){

//         echo $indice." ".$valor."<br>";
//     }
  
// }

// creamos una matriz con todas las bolas del bingo
function bolasCaja(){
    $arrayBolas=array(
        1,2,3,4,5,6,7,8,9,10,
        11,12,13,14,15,16,17,18,19,20,
        21,22,23,24,25,26,27,28,29,30,
        31,32,33,34,35,36,37,38,39,40,
        41,42,43,44,45,46,47,48,49,50,
        51,52,53,54,55,56,57,58,59,60
    );

    return $arrayBolas;

}


// funcion que pasamos como parametro un el array existente con las 60 bolas
// y comparamos cada uno de los numeros con un numero
function tirada($bolas){

    $bolaAleatoria=rand(1,60); // genera un numero de 1 a 60

    echo $bolaAleatoria;
    echo "<br>";
    foreach($bolas as $indice=>$valor){

        if($bolaAleatoria==$valor){
            $bolas[$indice]=0;
        }

    }

    return $bolas;
}

// generamos los cartones del bingo controlando la repeticion de numeros
function generarCartones(){

    $arrayCartilla;

    for($i=1;$i<=10;$i++){ // bucle que recorre 10 veces ya que cada carton va tener 10 numeros
        
        $num=rand(1,10);
        
        if(in_array($num, $arrayCartilla)){ // si esta en el array entra

           while(in_array($num, $arrayCartilla)){ // mientras exista en el array generamos otro numero
                $num=rand(1,10);
           }
            $arrayCartilla[$i]=$num;
            
        }else
        $arrayCartilla[$i]=$num;
    }

     return $arrayCartilla;

}

// creacion de una matriz 4 jugadores y 3 cartones
function jugadores(){

    $jugadores=array(
        'jugador1'=>generarCartones(),generarCartones(),generarCartones(),
        'jugador2'=>generarCartones(),generarCartones(),generarCartones(),
        'jugador3'=>generarCartones(),generarCartones(),generarCartones(),
        'jugador4'=>generarCartones(),generarCartones(),generarCartones()
    );

}




?>