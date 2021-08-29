<?php

class UsuarioDAO
{
    var $conexao, $stmt;
    public function UsuarioDAO()
    {
        $this->conexao = new PDO(
            'mysql:host=localhost;dbname=veterinario', 'root', '',
            array(
                PDO::ATTR_PERSISTENT => true
            )
        );
    }

    public function inserirUsuario($usuario)
    {
        $this->stmt = $this->conexao->prepare('insert into usuario (nome, cpf, email, usuario, senha)
        values (:nome, :cpf, :email, :usuario, :senha)');
        $nome = $usuario->nome;
        $cpf = $usuario->cpf;
        $email = $usuario->email;
        $user = $usuario->usuario;
        $senha = $usuario->senha;
        
        $this->stmt->bindValue(':nome', $nome);
        $this->stmt->bindValue(':cpf', $cpf);
        $this->stmt->bindValue(':email', $email);
        $this->stmt->bindValue(':usuario', $user);
        $this->stmt->bindValue(':senha', $senha);
        $this->stmt->execute();
    }

    public function listarUsuarios()
    {
        $usuarios = array();
        $this->stmt = $this->conexao->prepare("SELECT * FROM usuario;");
        $this->stmt->execute();
        while($usuario = $this->stmt->fetch())
        {
            array_push($usuarios, $usuario);
        }
        return $usuarios;


    }

}

?>