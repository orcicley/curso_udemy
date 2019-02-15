<?php

/*
##Array com foreach e select html##
echo "<select>";
    $meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novenbro","Dezembro");
    foreach($meses as $mes){
        echo '<option value="'.$mes.'">O mês é '.$mes.'</option>';
    }
    echo "</select>";*/


    /*
    ##Array com foreach e index##
    $meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novenbro","Dezembro");
    foreach($meses as $index => $mes){
        echo "o index é ".$index."<br />";
        echo "O mẽs é ".$mes."<br />";
    }
    */
    /*
echo "<select>";
    $dias = array("Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira","Quinta-feira","Sexta-Feira","Sábado");
    foreach ($dias as $index => $diassemana){
        echo '<option value="'.$diassemana.'"> '.$diassemana.'&nbsp;'.$index.'';
     
    }
echo "</select>";
*/

$anos = array("2019","2018","2017","2016","2015","2014","2013","2012","2011","2010","2009","2008","2007","2006","2005","2004","2003","2002","2001","2000");
foreach($anos as $index => $ano){
    echo "o Index é ".$index. "<br />".$ano ;
}
 ?>