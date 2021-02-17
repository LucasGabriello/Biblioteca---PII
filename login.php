<?php 
$name = $_POST['name'];
$entrar = $_POST['entrar'];
$age = $_POST['age'];
include_once("config.php");
  if (isset($entrar)) {
           
    $verifica = mysqli_query("SELECT * FROM users WHERE name = 
    '$name' AND age = '$age'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo "<script language='javascript' type='text/javascript'>
        alert('nome e/ou idade incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("nome",$nome);
        header("Location:home.php");
      }
  }
?>