<?php
    require_once 'global.php';

    try{
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $categoria = new Categoria($id);
        $categoria->alterarCategoria($nome);
        header('Location: categorias.php');
    }catch(Exception $e){
        new Erro;

    }