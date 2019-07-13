<?php 
require 'config.php';
include 'fornecedores.class.php';
$fornecedor = new Fornecedores();  

    if(!empty($_POST['id_fornecedores'])){
        $razaosocial = $_POST['razaosocial'];
        $id_fornecedores = $_POST['id_fornecedores'];

        $fornecedor->editar($razaosocial,$id_fornecedores);

        header("Location: ../index.php?link=3");
    }
    