<?php

class Usuario
{
    var $nome, $cpf, $email, $usuario, $senha;

    public function Usuario($nome, $cpf, $email, $usuario, $senha)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getCPF()
    {
        return $this->cpf;
    }

    function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getUsuario()
    {
        return $this->usuario;
    }

    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }
}

?>