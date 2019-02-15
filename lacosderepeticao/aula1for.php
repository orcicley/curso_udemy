<?php
    /*
    ##Laço simples, apenas incremento##
    for($i = 0; $i <  10; $i++){
        echo $i . " <br />";
    } */
    /*##Laço com incremento de 5 em 5 até 995##
    for($i = 0; $i <  1000; $i += 5){
        echo $i . " <br />";
    }*/
    /*for ($i = 0; $i <  1000; $i += 5 ){
        if ($i >= 200 && $i <= 800) continue;
        echo $i . "<br />";
    } */

    /*##Incrementando de 4 em 4 até 10, a apartir dai de 64  a 100##
    for ($i = 0; $i <= 100; $i += 4){
        if($i >= 10 && $i <= 60) continue;
        echo $i . "<br />";
    } */

   /*##Aqui ocorre o incremento antes da mesma forma só que de 4 em 4,  existe um if e else para especific
   ar, porém agora existe o elseif para para de vez o LUP##  
   for ($i = 0; $i <= 100; $i += 4){
        if ($i >= 10 && $i <= 60) continue;
        elseif($i === 80) break;
        echo $i . "<br />";
    }*/

    /*##Exemplo de loop infinito, é uma má prática de programação, que considera uma lógica ruim mais que mesmo assim 
    funciona no php.
     for($i = 0; $i <= 100; $i--){
    echo $i;
   }
    ##*/
    /*Loop com data*/
  /*  echo "<select>";
   for($i = date("Y"); $i >= date("Y")-100; $i--){  
    echo '<option value="'.$i.'">'.$i.'</option>';
   }
   echo "</select>";*/
  
?>