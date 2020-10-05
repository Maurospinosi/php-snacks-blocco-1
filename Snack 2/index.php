<?php
// Se il nome inserito è più corto di 3 caratteri, stampo : "Inserisci un nome con più di 3 caratteri!";
// se l'utente non inserisce alcun nome, stampo : "Devi inserire un nome";
// altrimenti stampo il nome inserito dall'utente.
if(!empty($_GET["nome"])){
 $name = $_GET["nome"];
  if(strlen($name) > 3){
    $mex = "Nome :"." ".$name;
  } else{
    $mex = "Inserisci un nome con più di 3 caratteri!";
  }
} else {
  $mex = "Devi inserire un nome...";
}

// Se l'utente non inserisce nessuna mail, stampo :"Inserire una mail";
// se l'uetente inserisce una mail non valida, stampo:"Inserire una mail valida";
// altrimenti stampo la mail inserita dall'uetente
if(!empty($_GET["email"])){
  $mail = $_GET["email"];
  if(strpos($mail, ".") != false && strpos($mail, "@") != false){
    $mex_2 = "La mail è :"." ".$mail;
  }else{
    $mex_2 = "Devi inserire una mail valida!";
  }
}else{
  $mex_2 = "Devi inserire una mail...";
}

// Se l'utente non inserisce nessun numero, stampo :"Inserire un numero";
// se l'uetente inserisce una lettera e non un numero, stampo:"Devi inserire un numero valido!";
// altrimenti stampo il numero inserito dall'uetente
if(!empty($_GET["eta"])){
  $age = $_GET["eta"];
  if(!is_numeric($age)){
    $mex_3 = "Devi inserire un numero valido!";
  }else {
    $mex_3 ="Età :"." ".$age;
  }
}else{
  $mex_3 = "Devi inserire un numero...";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2</title>
  </head>
  <body>
    <h2><?php echo $mex;?></h2>
    <h2><?php echo $mex_2;?></h2>
    <h2><?php echo $mex_3;?></h2>
  </body>
</html>
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
