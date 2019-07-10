<?php 
        include "CRUD/config.php";

        $acao   = $_GET["acao"];
        $id     = $_GET["id"];
    
      if ($acao =="Cadastrar" || $acao =="alterar" || $acao =="excluir"){
    
        $sql    = "SELECT * FROM fornecedores WHERE id_fornecedores = '$id'";
        $qry    = mysql_query($sql);
        $linha  = mysql_fetch_array($qry);
    
      }  
    

?>

<div id="box-Cadastro">
    <form id="frmFornecedores" name="frmFornecedores" method="post" action="op_forcenedores.php">
        <fieldset>
            <legend> Dados do Fornecedor </legend>
                <label>            
                    <spam>CNPJ </spam></br> 
                    <input type="text" name="txt_cnpj" id="txt_cnpj" value="<?php echo $linha['cnpj']; ?>">
                </label>

                <label>            
                        <spam>Razão Social</spam></br> 
                        <input type="text" name="txt_razaosocial" id="txt_razaosocial" value="<?php echo $linha['razaosocial']; ?>">
                </label>

                <label>            
                        <spam>Nome Fantasia</spam></br> 
                        <input type="text" name="txt_nomefantasia" id="txt_nomefantasia" value="<?php echo $linha['nomefantasia']; ?>">
                </label>

                <label>            
                        <spam>Indicador de Inscrição Estadual</spam></br> 
                        <select  name="txt_indicador" id="txt_indicador" value="<?php echo $linha['indicador']; ?>">
                                <option value="Contribuinte">Contribuinte</option>
                                <option value="isento">Contribuinte Isento</option>
                                <option value="nao">Não Contribuinte</option>
                        </select>
                </label>

                <label>            
                        <spam>Inscrição Estadual</spam></br> 
                        <input type="" name="txt_inscricaoestadual " id="txt_inscricaoestadual" value="<?php echo $linha['inscricaoestadual']; ?>">
                </label>

                <label>            
                        <spam>Inscrição Municipal</spam></br> 
                        <input type="text" name="txt_inscricaomunicipal" id="txt_inscricaomunicipal" value="<?php echo $linha['inscricaomunicipal']; ?>">
                </label>

                <label>            
                        <spam>Situação CNPJ</spam></br> 
                        <input type="text" name="txt_situacao" id="txt_situacao" value="<?php echo $linha['situacao']; ?>">
                </label>

                <label>            
                        <spam>Recolhimento</spam></br> 
                        <select  name="txt_recolhimento" id="txt_recolhimento" value="<?php echo $linha['recolhimento']; ?>">
                                <option value="Contribuinte">Selecione</option>
                                <option value="recolher">A Recolher pelo Prestador</option>
                                <option value="retido">Retido pelo Tomador</option>
                        </select>
                </label>

                <label>            
                        <spam>Ativo</spam></br> 
                        <select  name="txt_Ativo" id="txt_Ativo" value="<?php echo $linha['ativo']; ?>">
                                <option value="Contribuinte">Selecione</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                        </select>
                </label>



        </fieldset>

        <fieldset>
            <legend>Contato Principal </legend>

            <label>            
                    <spam>Telefone</spam></br> 
                    <input type="tel" name="txt_telefone" id="txt_telefone" value="<?php echo $linha['telefone']; ?>">
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="txt_tipot" id="txt_tipot" value="<?php echo $linha['tipot']; ?>">
                            <option value="selecione">Selecione</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Celular">Celular</option>
                    </select>
            </label>

            <label>            
                    <spam>Email</spam></br> 
                    <input type="email" name="txt_email" id="txt_email" value="<?php echo $linha['email']; ?>">
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="txt_tipoe" id="txt_tipoe" value="<?php echo $linha['tipoe']; ?>">
                            <option value="selecione">Selecione</option>
                            <option value="Residencial">Pessoal</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Outro">Outro</option>
                    </select>
            </label>
    
    
    
        </fieldset>

         <fieldset>
             <legend>Contatos Adicionais </legend>
             <label>            
                    <spam>Nome</spam></br> 
                    <input type="text" name="txt_nomea" id="txt_nomea" value="<?php echo $linha['nomea']; ?>">
            </label>

            <label>            
                    <spam>Empresa</spam></br> 
                    <input type="text" name="txt_empresa" id="txt_empresa" value="<?php echo $linha['empresa']; ?>">
            </label>

            <label>            
                    <spam>Cargo</spam></br> 
                    <input type="text" name="txt_cargo" id="txt_cargo" value="<?php echo $linha['cargo']; ?>">
            </label>

            <label>            
                    <spam>Telefone</spam></br> 
                    <input type="tel" name="txt_telefonea" id="txt_telefonea" value="<?php echo $linha['telefonea']; ?>">
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="txt_tipota" id="txt_tipota" value="<?php echo $linha['tipota']; ?>">
                            <option value="selecione">Selecione</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Celular">Celular</option>
                    </select>
            </label>

            <label>            
                    <spam>Email</spam></br> 
                    <input type="email" name="txt_emaila" id="txt_emaila" value="<?php echo $linha['emaila']; ?>">
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="txt_tipoea" id="txt_tipoea" value="<?php echo $linha['tipoea']; ?>">
                            <option value="selecione">Selecione</option>
                            <option value="Residencial">Pessoal</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Outro">Outro</option>
                    </select>
            </label>
        
        
        
        </fieldset>

        <fieldset>
                <legend>Dados de Endereço </legend>

                <label>            
                        <spam>CEP</spam></br> 
                        <input type="text" name="cep" id="cep" value="<?php echo $linha['cep']; ?>">
                </label>

                <label>            
                        <spam>Logradouro</spam></br> 
                        <input type="text" name="rua" id="rua" value="<?php echo $linha['logradouro']; ?>">
                </label>

                <label>            
                        <spam>Numero</spam></br> 
                        <input type="text" name="txt_numero" id="txt_numero" value="<?php echo $linha['numero']; ?>">
                </label>

                <label>            
                        <spam>Complemento</spam></br> 
                        <input type="text" name="txt_complemento" id="txt_complemento" value="<?php echo $linha['complemento']; ?>">
                </label>

                <label>            
                        <spam>Bairro</spam></br> 
                        <input type="text" name="bairro" id="bairro" value="<?php echo $linha['bairro']; ?>">
                </label>

                <label>            
                        <spam>Ponto de Referencia </spam></br> 
                        <input type="text" name="txt_pontoreferencia" id="txt_pontoreferencia" value="<?php echo $linha['pontoreferencia']; ?>">
                </label>

                <label>            
                        <spam>UF</spam></br> 
                        <select name="uf" id="uf" disabled data-target="#cidade">
                                        <option value="">Estado</option>
                                    </select>        
                </label>

                <label>            
                        <spam>Cidade</spam></br> 
                        <select  name="txt_cidade" id="cidade" disabled  value="<?php echo $linha['cidade']; ?>">
                                <option value="selecione">Selecione</option>
                        </select>        
                </label>

                <label>            
                        <spam>Condominio</spam></br> 
                        <select  name="txt_Condominio" id="txt_Condominio" value="<?php echo $linha['condominio']; ?>">
                                <option value="selecione">Selecione</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                        </select>        
                </label>
           
           
           
        </fieldset>

        <fieldset>
                <legend>Observação</legend>
                <label>            
                        <input type="text" name="txt_observacao" id="txt_observacao" value="<?php echo $linha['observacao']; ?>">
                </label>
                
           
           
           
        </fieldset>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="hidden" name="acao" value="<?php if ($acao !=""){echo $acao;}else{echo"Cadastrar";} ?>">
        <input type="submit" name="logar" id="logar" value="<?php if ($acao !=""){echo $acao;}else{echo"Cadastrar";} ?>" class="botao">
    </form>    
</div>
<!------------Requisicao para preencher o endereco-->!>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<Script>
        $(document).ready(function() {

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val("");
    $("#ibge").val("");
}

//Quando o campo cep perde o foco.
$("#cep").blur(function() {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");
            $("#ibge").val("...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
});
});



////////////////////////////////////////////////////////////////////////////////
        var estados = [];

function loadEstados(element) {
  if (estados.length > 0) {
    putEstados(element);
    $(element).removeAttr('disabled');
  } else {
    $.ajax({
      url: 'https://api.myjson.com/bins/enzld',
      method: 'get',
      dataType: 'json',
      beforeSend: function() {
        $(element).html('<option>Carregando...</option>');
      }
    }).done(function(response) {
      estados = response.estados;
      putEstados(element);
      $(element).removeAttr('disabled');
    });
  }
}

function putEstados(element) {

  var label = $(element).data('label');
  label = label ? label : 'Estado';

  var options = '<option value="">' + label + '</option>';
  for (var i in estados) {
    var estado = estados[i];
    options += '<option value="' + estado.sigla + '">' + estado.nome + '</option>';
  }

  $(element).html(options);
}

function loadCidades(element, estado_sigla) {
  if (estados.length > 0) {
    putCidades(element, estado_sigla);
    $(element).removeAttr('disabled');
  } else {
    $.ajax({
      url: theme_url + '/assets/json/estados.json',
      method: 'get',
      dataType: 'json',
      beforeSend: function() {
        $(element).html('<option>Carregando...</option>');
      }
    }).done(function(response) {
      estados = response.estados;
      putCidades(element, estado_sigla);
      $(element).removeAttr('disabled');
    });
  }
}

function putCidades(element, estado_sigla) {
  var label = $(element).data('label');
  label = label ? label : 'Cidade';

  var options = '<option value="">' + label + '</option>';
  for (var i in estados) {
    var estado = estados[i];
    if (estado.sigla != estado_sigla)
      continue;
    for (var j in estado.cidades) {
      var cidade = estado.cidades[j];
      options += '<option value="' + cidade + '">' + cidade + '</option>';
    }
  }
  $(element).html(options);
}

document.addEventListener('DOMContentLoaded', function() {
  loadEstados('#uf');
  $(document).on('change', '#uf', function(e) {
    var target = $(this).data('target');
    if (target) {
      loadCidades(target, $(this).val());
    }
  });
}, false);      


      

</Script>