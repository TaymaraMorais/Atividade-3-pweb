<?php

class Pets
{
    var $nome, $categoria, $idade, $imagem, $sintomas, $dono, $estado;

    public function Pets($nome, $categoria, $idade, $imagem, $sintomas, $dono, $estado)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->idade = $idade;
        $this->imagem = $imagem;
        $this->sintomas = $sintomas;
        $this->dono = $dono;
        $this->estado = $estado;
    }

  

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getCategoria()
    {
        return $this->categoria;
    }

    function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    function getIdade()
    {
        return $this->idade;
    }

    function setIdade($idade)
    {
        $this->idade = $idade;
    }

    function getImagem()
    {
        return $this->imagem;
    }

    function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    function getSintomas()
    {
        return $this->sintomas;
    }

    function setSintomas($sintomas)
    {
        $this->sintomas = $sintomas;
    }

    function getDono()
    {
        return $this->dono;
    }

    function setDono($dono)
    {
        $this->dono = $dono;
    }

    function getEstado()
    {
        return $this->estado;
    }

    function setEstado($estado)
    {
        $this->estado = $estado;
    }



}

?>