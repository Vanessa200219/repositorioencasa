<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPASO LOGICA DE PROGRAMACION WEB</title>
</head>
<body>
    <?php 
    echo 'Comenzamos ARREGLOS EN PHP <br>';
   
    $numeros=array();
    //Funcion Suma de Arreglos
    
    function sumaArray($nums){
        $suma=0;
        for ($i=0; $i <count($nums) ; $i++) { 
            $suma=$suma+$nums[$i];
        }
        return $suma;
    }

    function Promedio($nums){
        $promedio=0;
        for ($i=0; $i <count($nums) ; $i++) { 
            $promedio=$promedio+$nums[$i];
            $resultado=$promedio/3;
        }
        return $resultado;
    }


    function mayor($nums){
        $mayor=0;
        foreach ($nums as $valor) {
            if ($valor>$mayor) 
                $mayor=$valor;
            }
            return $mayor;
        }


        function menor($nums){
            $menor=0;
            foreach ($nums as $valor) { 
                if ($nums<$menor) 
                    $menor=$nums;
                }
                return $menor;
            }


        function media($nums){
            $media=0;
            for ($i=0; $i <count($nums) ; $i++) { 
                $media=$media+$nums[$i];
                $media=$media/2;
            }
            return $media;
        }


        function calculate_median($nums) {
            sort($nums);
            $count = count($nums);
            $middleval = floor(($count-1)/2);
            if($count % 2) {
            $median = $nums[$middleval];
            } else {
            $low = $nums[$middleval];
            $high = $nums[$middleval+1];
            $median = (($low+$high)/2);
            }
            return $median;
            }


            function median($nums) {
                $media=0;
                for ($i=0; $i <count($nums) ; $i++) { 
                    $cantidad = count($nums);
                    $media = ($cantidad + 1) / 2;
                }
                return $media;
            }

        
    


    for ($i=0; $i < 3; $i++) { 
        $numeros[$i]=rand(0,100);
    }

    for ($i=0; $i <3 ; $i++) { 
        echo $numeros[$i].',';
    }
    echo '<br>';

    
    // $suma=0;
    // for ($i=0; $i <20 ; $i++) { 
    //     $suma=$suma+$numeros[$i];
    // }
    echo "la suma es: ".sumaArray($numeros).'<br>';
    echo "la promedio es: ".Promedio($numeros).'<br>';
    echo "la numero mayor es: ".mayor($numeros).'<br>';
    echo "la numero menor es: ".menor($numeros).'<br>';
    echo "la numero menor es: ".calculate_median($numeros).'<br>';
    echo "la numero menor es: ".median($numeros).'<br>';
    

    ?>
</body>
</html>