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
        $inscricaomunicipal    = $_POST['inscricaomunicipal'];
        $situacao    = $_POST['situacao'];
        $recolhimento    = $_POST['recolhimento'];
        $ativo    = $_POST['ativo'];
        $telefone    = $_POST['telefone'];
        $tipot    = $_POST['tipot'];


        $id_fornecedores    = $_POST['id_fornecedores'];
        

        $fornecedor->editar($cnpj,$razaosocial,$nomefantasia,$indicador,
        $inscricaoestadual,$inscricaomunicipal,$situacao,$recolhimento,$ativo,
        $telefone,$tipot,
        $id_fornecedores);
        header("Location: ../index.php?link=3");
    }
    