<?php

    function Primos($inicial,$final){
        $primos = array();
        for($i = $inicial; $i < $final; $i++){
            $contador = 0;
            for($j = 1; $j <= $i; $j++){
                if($i % $j == 0){
                    $contador++;
                }
            }
            if($contador == 2){
                $primos[] = $i;
            }
        }
        return $primos;
    }

    print_r(Primos(10,29));

?>