<?php

include ("setyget.php");


if (isset($_GET['enviar'])) {
    $numero=$_GET['number'];
    echo "<br><br><br> El tamaño de los numeros es: $numero <br><br><br>";

    $people=new funcion($numero);
}//Llave de la clase



    
    echo "los numeros son: <br> $numero";


    //Funcion Suma de Arreglos
    $numeros=array();
    
    for ($i=0; $i < $numero; $i++) { 
        $numeros[$i]=rand(0,10);
    }   

    for ($i=0; $i <$numero ; $i++) { 
        echo $numeros[$i].'<br>';
    }




    function Promedio($nums){
        $suma=0;
        for ($i=0; $i <count($nums) ; $i++) { 
            $suma=0+$nums[$i];
        }
        return $suma;
    }







    echo "<br><br> la promedio es: " .Promedio($numeros).'<br>';


?>