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
        $nomea    = $_POST['nomea'];
        $empresa    = $_POST['empresa'];
        $cargo    = $_POST['cargo'];
        $telefonea    = $_POST['telefonea'];
        $tipota    = $_POST['tipota'];
        $emaila    = $_POST['emaila'];
        $tipoea         = $_POST['tipoea'];
        $cep         = $_POST['cep'];
        $rua         = $_POST['rua'];
        $numero         = $_POST['numero'];
        $complemento         = $_POST['complemento'];
        $bairro         = $_POST['bairro'];
        $pontoreferencia         = $_POST['pontoreferencia'];
        $uf         = $_POST['uf'];
        $cidade         = $_POST['cidade'];
        $condominio         = $_POST['condominio'];
        $observacao         = $_POST['observacao'];
        $id_fornecedores    = $_POST['id_fornecedores'];
        
        $fornecedor->editar($cnpj,$razaosocial,$nomefantasia,$indicador,
        $inscricaoestadual,$inscricaomunicipal,$situacao,$recolhimento,$ativo,
        $telefone,$tipot,$tipoe,$nomea,$empresa,$cargo,$telefonea,$tipota,$emaila,
        $tipoea,$cep,$rua,$numero,$complemento,$bairro,$pontoreferencia,$uf,$cidade,$condominio,$observacao,
        $id_fornecedores);
    header("Location: ../index.php?link=3");
    }    