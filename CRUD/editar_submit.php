<?php 
require 'config.php';
include 'fornecedores.class.php';
$fornecedor = new Fornecedores();  

    if(!empty($_POST['id_fornecedores'])){
        $nome = $_POST['cnpj'];
        $id_fornecedores = $_POST['id_fornecedores'];

        header("Location: ../index.php?link=3");
    }
    