<?php
    require_once 'global.php';

    try{
        $id = $_GET['id'];
        $categoria = new Categoria($id);
        $categoria->deletarCategoria();
        header('Location: categorias.php');
    }catch(Exception $e){
        new Erro();
        Erro::tratarErro($e);
        exit;
    }