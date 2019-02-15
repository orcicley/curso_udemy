
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<tr>
<th>Tarefas</th>
</tr>
   
</table>
<form>
<fieldset>
        <legend>Nova tarefa</legend>
             <label>
                    Tarefa:
                 <input type="text" name="nome" />
             </label>
        <input type="submit" value="Cadastrar" />
        </fieldset>
</form>
<?php foreach ($listatarefas as $tarefa) : ?>
        <tr>
            <td><?php echo $tarefa; ?> </td>
        </tr>
    <?php endforeach; ?>
</body>
</html>

<?php
$listatarefas = array();
    if(isset($_GET["nome"])){
        $listatarefas[] = $_GET["nome"];
    }
?>