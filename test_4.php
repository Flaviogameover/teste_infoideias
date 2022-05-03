<?php

    function SequenciaCrescente($array){
        $contador = 0;
        $ultima = 0;
        for($i = 0; $i < count($array) - 1; $i++){
            if($array[$i] >= $array[$i+1]){
                $contador++;
            }
        }
        for($i = 0; $i < count($array) - 2; $i++){
            if($array[$i] >= $array[$i+2]){
                $ultima++;
            }
        }
        if(($contador <=1) && ($ultima <= 1)){
            return true;
        }

        return false;
    }

    $array = [123, -17, -5, 1, 2, 3, 12, 43, 45] ;
    if(SequenciaCrescente($array)){
        echo "É uma sequência crescente";
    }else{
        echo "Não é uma sequência crescente";
    }

?>