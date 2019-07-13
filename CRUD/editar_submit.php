<?php 
require 'config.php';
include 'fornecedores.class.php';
$fornecedor = new Fornecedores();  

    if(!empty($_POST['id_fornecedores'])){
        $cnpj               = $_POST['cnpj'];
        $razaosocial               = $_POST['razaosocial'];
        $nomefantasia               = $_POST['nomefantasia'];
        $indicador               = $_POST['indicador'];
        $inscricaoestadual               = $_POST['inscricaoestadual'];
        $id_fornecedores    = $_POST['id_fornecedores'];

        $fornecedor->editar($cnpj,$razaosocial,$nomefantasia,$indicador,
        $inscricaoestadual,
        $id_fornecedores);
        header("Location: ../index.php?link=3");
    }
    