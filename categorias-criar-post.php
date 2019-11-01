<?php
    require_once 'global.php';

    $nome = $_POST['nome'];
    $categoria = new Categoria();
    $categoria->criarCategoria($nome);
    header('Location: categorias.php');