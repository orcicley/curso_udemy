<?php
    $nome = "orcicley";

    function teste(){
        global $nome;
        echo $nome;
    }
   echo  teste();
?>