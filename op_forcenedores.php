<?php  

    include "CRUD/config.php";

    $acao   = $_POST["acao"];
    $id     = $_POST["id"];

    $txt_cnpj                    = $_POST["txt_cnpj"];
    $txt_razaosocial            = $_POST["txt_razaosocial"];
    $txt_nomefantasia           = $_POST["txt_nomefantasia"];
    $txt_indicador              = $_POST["txt_indicador"];
    $txt_inscricaomunicipal      = $_POST["txt_inscricaomunicipal"];
    $txt_situacao                    = $_POST["txt_situacao"];
    $txt_recolhimento               = $_POST["txt_recolhimento"];
    $txt_Ativo              = $_POST["txt_Ativo"];
    $txt_telefone           = $_POST["txt_telefone"];
    $txt_tipot               = $_POST["txt_tipot"];
    $txt_email               = $_POST["txt_email"];
    $txt_tipoe               = $_POST["txt_tipoe"];
    $txt_nomea                = $_POST["txt_nomea"];
    $txt_empresa             = $_POST["txt_empresa"];
    $txt_cargo               = $_POST["txt_cargo"];
    $txt_telefonea            = $_POST["txt_telefonea"];
    $txt_tipota              = $_POST["txt_tipota"];
    $txt_emaila             = $_POST["txt_emaila"];
    $txt_tipoea              = $_POST["txt_tipoea"];
    $txt_cep                = $_POST["txt_cep"];
    $txt_logradouro         = $_POST["txt_logradouro"];
    $txt_numero              = $_POST["txt_numero"];
    $txt_complemento         = $_POST["txt_complemento"];
    $txt_bairro              = $_POST["txt_bairro"];
    $txt_pontoreferencia         = $_POST["txt_pontoreferencia"];
    $txt_uf                 = $_POST["txt_uf"];
    $txt_cidade             = $_POST["txt_cidade"];
    $txt_Condominio         = $_POST["txt_Condominio"];
    $txt_observacao             = $_POST["txt_observacao"];
    //$txt_cpf              = $_POST["txt_cpf"];
    //$txt_nome             = $_POST["txt_nome"];
    //$txt_apelido             = $_POST["txt_apelido"];

    
	
    if($acao=="inserir"){
	$sql = "INSERT INTO fornecedores (cnpj,razaosocial,nomefantasia,indicador,
            inscricaoestadual,inscricaomunicipal,situacao,recolhimento,ativo,telefone,tipot,email,tipoe,
            nomea,empresa,cargo,telefonea,tipota,emaila,tipoea,cep,logradouro,
            numero,complemento,bairro,pontoreferencia,uf,cidade,condominio,observacao)

		VALUES ('txt_cnpj','txt_razaosocial','txt_nomefantasia','txt_indicador',
        'txt_inscricaoestadual','txt_inscricaomunicipal','txt_situacao','txt_recolhimento','txt_ativo','txt_telefone',
        'txt_tipot','txt_email','txt_tipoe',
        'txt_nomea','txt_empresa','txt_cargo','txt_telefonea','txt_tipota','txt_emaila','txt_tipoea','txt_cep','txt_logradouro',
        'txt_numero','txt_complemento','txt_bairro','txt_pontoreferencia',
        'txt_uf','txt_cidade','txt_condominio','txt_observacao')";
        mysql_query($sql) or die("NÃ£o foi possivel inserir os dados");
        
}
	if($acao=="alterar"){
		$sql= "UPDATE fornecedores set

	    cnpj                 = '$txt_cnpj',
        razaosocial          = '$txt_razaosocial',
        nomefantasia         = '$txt_nomefantasia',
        indicador            = '$txt_indicador',
        inscricaoestadual    = '$txt_inscricaoestadual',
        inscricaomunicipal   = '$txt_inscricaomunicipal',
        situacao             = '$txt_situacao',
        recolhimento         = '$txt_recolhimento',
        ativo                = '$txt_Ativo',
        telefone             = '$txt_telefone',
        tipot                = '$txt_tipot',
        email                = '$txt_email',
        tipoe                = '$txt_tipoe',
        nomea                = '$txt_nomea',
        empresa              = '$txt_empresa',
        cargo                = '$txt_cargo',
        telefonea            = '$txt_telefonea',
        tipota               = '$txt_tipota',
        emaila               = '$txt_emaila',
        tipoea               = '$txt_tipoea',
        cep                  = '$txt_cep',
        logradouro           = '$txt_logradouro',
        numero               = '$txt_numero',
        complemento          = '$txt_complemento',
        bairro               = '$txt_bairro',
        pontoreferencia      = '$txt_pontoreferencia',
        uf                   = '$txt_uf',
        cidade               = '$cidade',
        Condominio           = '$txt_Condominio',
        observacao           = '$txt_observacao'
        


		WHERE id_fornecedores = '$id'";
		mysql_query($sql) or die("NÃ£o foi possivel Alterar os dados");
		echo "<script type = 'text/javascript'> location.href='index.php?link=3' </script>";
	}

	if ($acao=="excluir") {
		# code...
		$sql = "DELETE FROM fornecedores WHERE id_fornecedores = '$id'";
		mysql_query($sql) or die("NÃ£o foi possivel Alterar os dados");
		echo "<script type = 'text/javascript'> location.href='principal.php?link=3' </script>";

	}
	







?>