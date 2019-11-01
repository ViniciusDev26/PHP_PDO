<?php

class Categoria
{

    private $id;
    private $nome;

    public function __construct($id = false)
    {
        if($id){
            $this->carregar($id);
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getId()
    {
        return $this->id;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'nome' => $this->getNome()
        ];
    }

    public function listar()
    {
        $query = "SELECT * FROM categorias";
        $conexao = Conexao::getConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar($id)
    {
        $query = "SELECT * FROM categorias where id = " . $id;
        $conexao = Conexao::getConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchALL();
        $this->nome = $lista[0]['nome'];
        $this->id = $lista[0]['id'];
    }

    public function criarCategoria($nome)
    {
        $query = "insert into categorias (nome) values ('" . $nome . "')";
        $conexao = Conexao::getConexao();
        $conexao->exec($query);
    }

    public function alterarCategoria($nome)
    {
        $query = "update categorias set nome = '". $nome ."' where id =" . $this->id;
        $conexao = Conexao::getConexao();
        $conexao->exec($query);
    }

    public function deletarCategoria()
    {
        $query = "delete from categorias where id =" . $this->id;
        $conexao = Conexao::getConexao();
        $conexao->exec($query);
    }
}