
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
      <div class="input-field col s12 l6">
      <label for="primer_nombre">Nome</label>
        <input type="text" id="primer_nombre" name="nome">
        
      </div>
      <div class="input-field col s12 l6">
      <label for="segundo_nombre">Nasciemento</label>
        <input type="date" id="segundo_nombre" name="nascimento">
       
      </div>
     
      <button class="btn waves-effect waves-light blue">Enviar
        <i class="material-icons right">ok</i>
      </button>
    </form>
</body>
</html>
<?php
 if(isset($_GET)){
   foreach($_GET as $key => $value){
     echo "O nome do campo é ".$key."<br />";
     echo "O nome do valor é ".$value."<br />";
   }
 }
?>