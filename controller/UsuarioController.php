<?php

require_once $_SERVER['DOCUMENT_ROOT']."/Projeto da Tay/model/Usuario.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Projeto da Tay/dao/UsuarioDAO.php";

class UsuarioController
{
    var $usuario, $usuarioDAO;
    public function cadastrarUsuario($nome, $cpf, $email, $user, $senha)
    {
        $this->usuario = new Usuario($nome, $cpf, $email, $user, $senha);
        $this->usuarioDAO = new UsuarioDAO();
        return $this->usuarioDAO->inserirUsuario($this->usuario);
    }


}

$usuario = new UsuarioController();
if(isset($_POST['nome']))
{   
 $usuario->cadastrarUsuario($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['usuario'], $_POST['senha']);
 
header('location:../view/loginUsuario.php');
}

?>