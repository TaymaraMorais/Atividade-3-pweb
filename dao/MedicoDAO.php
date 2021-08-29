<?php

class MedicoDAO
{
    var $conexao, $stmt;
    public function MedicoDAO()
    {
        $this->conexao = new PDO(
            'mysql:host=localhost;dbname=veterinario', 'root', '',
            array(
                PDO::ATTR_PERSISTENT => true
            )
        );
    }

    public function inserirMedico($medico)
    {
        $this->stmt = $this->conexao->prepare('insert into medico (nome, cpf, email, usuario, senha, crm)
        values (:nome, :cpf, :email, :usuario, :senha, :crm)');
        $nome = $medico->nome;
        $cpf = $medico->cpf;
        $email = $medico->email;
        $crm = $medico->crm;
        $user = $medico->usuario;
        $senha = $medico->senha;
        
        $this->stmt->bindValue(':nome', $nome);
        $this->stmt->bindValue(':cpf', $cpf);
        $this->stmt->bindValue(':email', $email);
        $this->stmt->bindValue(':usuario', $user);
        $this->stmt->bindValue(':senha', $senha);
        $this->stmt->bindValue(':crm', $crm);
        $this->stmt->execute();
    }

    public function listarMedicos()
    {
        $medicos = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM medico;");
        $this->stmt->execute();
        while($medico = $this->stmt->fetch())
        {
            array_push($medicos, $medico);
        }
        return $medicos;
    }

}

?>