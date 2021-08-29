<?php 

session_start();

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$conexao = mysqli_connect("localhost", "root", "", "veterinario");
 

$sql = "select * from usuario where usuario = '$login' and senha='$senha'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
$select = mysqli_fetch_assoc($resultado);
$_SESSION['id'] = $select['id'];
$_SESSION['nome'] = $select['nome'];
$_SESSION['cpf'] = $select['cpf'];
$_SESSION['email'] = $select['email'];

header('location:telaUsuario.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:loginUsuario.php');
   
  }
?>