<?php

class PetsDAO
{
    var $conexao, $stmt;

    public function PetsDAO()
    {
        $this->conexao = new PDO(
            'mysql:host=localhost;dbname=veterinario', 'root', '',
            array(
                PDO::ATTR_PERSISTENT => true
            )
        );
    }

    public function inserirPet($pet)
    {
        $this->stmt = $this->conexao->prepare('insert into pets (nome, categoria, idade, imagem, sintomas, dono, estado)
        values(:nome, :categoria, :idade, :imagem, :sintomas, :dono, :estado)');

        $nome = $pet->nome;
        $categoria = $pet->categoria;
        $idade = $pet->idade;
        $imagem = $pet->imagem;
        $sintomas = $pet->sintomas;
        $dono = $pet->dono;
        $estado = $pet->estado;

        $this->stmt->bindValue(':nome', $nome);
        $this->stmt->bindValue(':categoria', $categoria);
        $this->stmt->bindValue(':idade', $idade);
        $this->stmt->bindValue(':imagem', $imagem);
        $this->stmt->bindValue(':sintomas', $sintomas);
        $this->stmt->bindValue(':dono', $dono);
        $this->stmt->bindValue(':estado', $estado);

        $this->stmt->execute();

    }

    public function editarPet($pet, $id)
    {
        $this->stmt = $this->conexao->prepare('update pets set nome=:nome, idade=:idade, sintomas=:sintomas, estado=:estado where id=:id');

        $nome = $pet->nome;
        $idade = $pet->idade;
        $sintomas = $pet->sintomas;
        $estado = $pet->estado;

        $this->stmt->bindValue(':nome', $nome);
        $this->stmt->bindValue(':idade', $idade);
        $this->stmt->bindValue(':sintomas', $sintomas);
        $this->stmt->bindValue(':estado', $estado);
        $this->stmt->bindValue(':id', $id);

        $this->stmt->execute();

    }

    public function deletarPet($id)
    {
        $this->stmt = $this->conexao->prepare('delete from pets where id=:id');
        $this->stmt->bindValue(':id', $id);

        $this->stmt->execute();
	}





    public function listarPets()
    {
        $pets = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM pets where estado = 0 or estado = 1");
        $this->stmt->execute();
        while($pet = $this->stmt->fetch())
        {
            array_push($pets, $pet);
        }
        return $pets;


    }

    public function listarAllPets($user)
    {
        $pets = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM pets where dono=:user");
        $this->stmt->bindValue(':user', $user);
        $this->stmt->execute();
        while($pet = $this->stmt->fetch())
        {
            array_push($pets, $pet);
        }
        return $pets;
    }

    public function listarTodosPets()
    {
        $pets = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM pets where estado = 0");
        $this->stmt->execute();
        while($pet = $this->stmt->fetch())
        {
            array_push($pets, $pet);
        }
        return $pets;
    }


    public function procurarPet($id)
    {
        $pets = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM pets where id=:id");
        $this->stmt->bindValue(':id', $id);
        $this->stmt->execute();
        while($pet = $this->stmt->fetch())
        {
            array_push($pets, $pet);
        }
        return $pets;


    }

    public function consultarPet($user)
    {
        $consultas = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM pets where estado = 1 and dono=:user");
        $this->stmt->bindValue(':user', $user);
        $this->stmt->execute();
        while($consulta = $this->stmt->fetch())
        {
            array_push($consultas, $consulta);
        }
        return $consultas;

    }

    public function consultarTodosPet()
    {
        $consultas = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM pets where estado = 1");
        $this->stmt->execute();
        while($consulta = $this->stmt->fetch())
        {
            array_push($consultas, $consulta);
        }
        return $consultas;

    }

    public function solicitarConsulta($id)
    {
        $this->stmt = $this->conexao->prepare('update pets set estado = 1 where id=:id');

        $this->stmt->bindValue(':id', $id);

        $this->stmt->execute();
    }
    
    

    public function realizarConsulta($id, $medico)
    {
        $this->stmt = $this->conexao->prepare('update pets set estado = 2, medico=:medico where id=:id');

        $this->stmt->bindValue(':medico', $medico);
        $this->stmt->bindValue(':id', $id);

        $this->stmt->execute();
    }
    
}

?>
