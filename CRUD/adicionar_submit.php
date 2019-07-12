<?php 
require 'config.php';
include 'fornecedores.class.php';
$fornecedor = new Fornecedores();  

    $cnpj = $_POST['cnpj'];
    $razaosocial = $_POST['razaosocial'];
    $nomefantasia = $_POST['nomefantasia'];
    $indicador = $_POST['indicador'];
    $inscricaoestadual = $_POST['inscricaoestadual'];
    $inscricaomunicipal = $_POST['inscricaomunicipal'];
    $sitsituacao = $_POST['sitsituacao'];
    $recolhimento = $_POST['recolhimento'];
    $ativo = $_POST['ativo'];
    $telefone = $_POST['telefone'];
    $tipot = $_POST['tipot'];
    $email = $_POST['email'];
    $tipoe = $_POST['tipoe'];

    $fornecedor->adicionar($cnpj,$razaosocial,$nomefantasia,$indicador,$inscricaoestadual,
    $inscricaomunicipal,$sitsituacao, $recolhimento ,$ativo,$telefone,$tipot,$email,$tipoe );

    header("Location: ../index.php?link=3");