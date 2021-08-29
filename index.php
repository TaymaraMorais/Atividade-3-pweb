<?php
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: view/telaInicial.php');
}

else if(isset ($_SESSION['crm']) == true)
{
    header('location: view/telaMedico.php');
}

else 
{
	header('location: view/telaUsuario.php');
}




?>

