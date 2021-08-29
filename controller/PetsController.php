<?php

require_once $_SERVER['DOCUMENT_ROOT']."/Projeto da Tay/model/Pets.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Projeto da Tay/dao/PetsDAO.php";

class PetsController
{
    var $pet, $petDAO;
    public function cadastrarPet($nome, $categoria, $idade, $imagem, $sintomas, $dono, $estado)
    {
        $this->pet = new Pets($nome, $categoria, $idade, $imagem, $sintomas, $dono, $estado);
        $this->petDAO = new PetsDAO();
        return $this->petDAO->inserirPet($this->pet);
    }

    public function atualizarPet($nome, $idade, $sintomas, $estado, $id)
    {
        $this->pet = new Pets($nome, null, $idade, null, $sintomas, null, $estado);
        $this->petDAO = new PetsDAO();
        return $this->petDAO->editarPet($this->pet, $id);
	}

    public function excluirPet($id)
    {
        $this->petDAO = new PetsDAO();
        return $this->petDAO->deletarPet($id);
	}

    public function exibirPets($user)
    {
        $this->petDAO = new PetsDAO();
        return $this->petDAO->listarAllPets($user);
    }

    public function listarTodosPets()
    {
        $this->petDAO = new PetsDAO();
        return $this->petDAO->listarTodosPets();
	}

    public function acharPet($id)
    {
        $this->petDAO = new PetsDAO();
        return $this->petDAO->procurarPet($id);
    }

    public function exibirConsultas()
    {
        $this->petDAO = new PetsDAO();
        return $this->petDAO->consultarTodosPet();
    }

    public function solicitarConsulta($id)
    {
        $this->petDAO = new PetsDAO();
        return $this->petDAO->solicitarConsulta($id);
    
    }

    public function realizarConsulta($id, $dono)
    {
        $this->petDAO = new PetsDAO();
        return $this->petDAO->realizarConsulta($id, $dono);
    }


}

$pet = new PetsController();
if(isset($_POST['acao']))
{   
    $pet->solicitarConsulta($_POST['pet']);
   
    
}

if(isset($_POST['action']))
{
    $pet->realizarConsulta($_POST['idPet'], $_POST['novo']);
    header('location:../view/atendimento.php');
}


if(isset($_POST['exibir']))
{
    $pet->exibirPets($_POST['dono']);
   
}

if(isset($_POST['nome']))
{   
 $pet->cadastrarPet($_POST['nome'], $_POST['categoria'], $_POST['idade'], $_POST['imagem'], $_POST['sintomas'], $_POST['dono'], $_POST['estado']);
header('location:../index.php');
}

if(isset($_POST['novossintomas']))
{
    $pet->atualizarPet($_POST['novonome'], $_POST['idade'], $_POST['novossintomas'], $_POST['estado'], $_POST['idAnimal']);
    header('location: ../index.php');
}

if(isset($_POST['deletar']))
{
    $pet->excluirPet($_POST['idAnimal']);
    header('location: ../index.php');
}


?>