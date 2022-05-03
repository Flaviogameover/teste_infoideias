<?php

    function Sortear($num){
        $n_repetidos = [];
        $sorteados = [];
        for($i = 0; $i < $num; $i++){
            $sorteado = rand(1,10);
            $sorteados[] = $sorteado;
        }
        $contador = array_count_values($sorteados);
        
        foreach ($contador as $numero => $valor) {
            if ($valor === 1) {
                $n_repetidos[] = $numero;
            }
        }
        return $n_repetidos;
    }

    $sorteados = Sortear(20);
    print_r($sorteados);

?>