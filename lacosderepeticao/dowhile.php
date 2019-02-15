
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        Valor: <input type="number" name="valor">
        <br />
        Aqui vc escolhe o desconto:
        <select name="desconto">
            <option value="10">10%</option>
            <option value="11">11%</option>
            <option value="12">12%</option>
        </select>
        <input type="submit" name="ok">
    </form>

</body>
</html>

<?php
    $valor = $_GET["valor"];
    $desconto = $_GET["desconto"];  
    $total = (($valor * $desconto)/100);  
        if($total > 100){
            echo "O desconto é ".$total;
        }
   
         
    
       
    
?>