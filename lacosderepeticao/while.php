<?php
    $condicao = True;
    while($condicao){
        $numero = rand(1, 10);
        if($numero === 3){
            echo "O numero é ".$numero. "<br />";
            $condicao = false;
        }
        echo $numero. " ";
    }
?>