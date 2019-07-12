<?php
    require 'config.php';
    include 'fornecedores.class.php';
    $fornecedor = new Fornecedores(); 

    if(!empty($_GET['id_fornecedores'])){

        $id_fornecedores = $_GET['id_fornecedores'];

        $fornecedor->excluir($id_fornecedores);
    }
    header("Location: ../index.php?link=3");