<?php

    function SeculoAno($ano){
        if($ano < 1) {
            return "Ano inválido";
        }
        return ceil($ano/100);
    }

    //echo SeculoAno(1905);
    //echo SeculoAno(1700);   

?>