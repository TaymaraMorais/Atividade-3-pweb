<?php

require_once $_SERVER['DOCUMENT_ROOT']."/Projeto da Tay/model/Medico.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Projeto da Tay/dao/MedicoDAO.php";

class MedicoController
{
    var $medico, $medicoDAO;
    public function cadastrarMedico($nome, $cpf, $email, $user, $senha, $crm)
    {
        $this->medico = new Medico($nome, $cpf, $email, $user, $senha, $crm);
        $this->medicoDAO = new MedicoDAO();
        return $this->medicoDAO->inserirMedico($this->medico);
    }


}

$medico = new MedicoController();
if(isset($_POST['nome']))
{   
 $medico->cadastrarMedico($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['usuario'], $_POST['senha'], $_POST['crm']);
 
header('location:../view/loginMedico.php');
}

?>