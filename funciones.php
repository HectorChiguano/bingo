<?php


// funcion que devuelve un array con los jugadores 
function jugadores(){

    $numjugadores=4;
    $jugadores=array();

    for($i=1;$i<=$numjugadores;$i++){
        
        $jugadores['jugador'.$i]=array();
    }

    return $jugadores;

}

// funcion que muestra la tirada de bombo
function sacarBolaBombo(){
    
    
    $bolasExtraidas=array();
  
    while(count($bolasExtraidas)<60){

        $aleatorio=(int)rand(1,60);

        while(in_array($aleatorio, $bolasExtraidas)){
            $aleatorio=(int)rand(1,60);
        }

           // echo "<img id='bola' src='bolas/".$aleatorio.".PNG'/>";
        
        array_push($bolasExtraidas, $aleatorio);
       
    }
    // for ($i=1 ;$i <= 60; $i++ ){ 

    //  if($i==$aleatorio){
    //      echo "<img id='bola' src='bolas/".$i.".PNG'/>";
    //  }
    //    while(){

    //    }
    // }

    return $bolasExtraidas;
}





// funcion que devuelve la cartilla de cada jugador
function cartilla(){
            
    $cartilla;

    for ($i=1; $i <= 10; $i++) { 
        $aleatorio=(int)rand(1,60);
        if(in_array($aleatorio, $cartilla)){
            while(in_array($aleatorio, $cartilla)){
                $aleatorio=(int)rand(1,60);
            }
            $cartilla[$i]=$aleatorio;

        }else{
            $cartilla[$i]=$aleatorio;
        }
        
    }

    return $cartilla;
}


?>