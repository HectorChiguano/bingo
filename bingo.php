<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" tye="text/css" href="css/estilos.css"/>
    <title>BINGO</title>
</head>
<body>
    <header class="titulo"> BINGO </header>
    <div id="bolas">
        <h2>Bolas extraidas del bombo</h2>
    </div>
    <div>
        <?php

        require('funciones.php');
 
        // recogemos las bolas extraidas del bombo
            $arrayBolasExtraidasBombo=sacarBolaBombo();

            foreach($arrayBolasExtraidasBombo as $indice){
                    echo "<img id='bola' src='bolas/".$indice.".PNG'/>";
            }

            //var_dump($arrayBolasExtraidasBombo);
            echo "<br>";

            $arrayJugadores=jugadores();

            //asignacion de una cartilla cada jugador
            foreach($arrayJugadores as $indice=>$valor){
                $arrayJugadores[$indice]=cartilla();
            }

            // muestra de cada jugador con su cartilla
            foreach($arrayJugadores as $jugador=>$dato){
                echo "<h2>".$jugador."</h2>";
                foreach($dato as $indice){
                    //echo $indice;
                    echo "<img id='bola' src='bolas/".$indice.".PNG'/>";
                }
                echo "<br>";
            }
            echo "<br>";

            //asignacion de una cartilla cada jugador
            foreach($arrayJugadores as $indice=>$valor){
                $arrayJugadores[$indice]=cartilla();
            }

        ?>        
    </div>
</body>
</html>