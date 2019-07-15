<?php 
       require 'CRUD/config.php';
       include 'CRUD/fornecedores.class.php';

       $fornecedor = new Fornecedores();  
    
    

?>

<div id="box-Cadastro">
    <form id="frmFornecedores" name="frmFornecedores" method="POST" action="CRUD/adicionar_submit.php">
        <fieldset>
            <legend> Dados do Fornecedor </legend>
                <label>            
                    <spam>CNPJ </spam></br> 
                    <input type="text" name="cnpj" id="cnpj" >
                </label>

                <label>            
                        <spam>Razão Social</spam></br> 
                        <input type="text" name="razaosocial" id="razaosocial" >
                </label>

                <label>            
                        <spam>Nome Fantasia</spam></br> 
                        <input type="text" name="nomefantasia" id="nomefantasia" >
                </label>

                <label>            
                        <spam>Indicador de Inscrição Estadual</spam></br> 
                        <select  name="indicador" id="indicador"  >
                                <option value="Contribuinte">Contribuinte</option>
                                <option value="isento">Contribuinte Isento</option>
                                <option value="nao">Não Contribuinte</option>
                        </select>
                </label>

                <label>            
                        <spam>Inscrição Estadual</spam></br> 
                        <input type="text" name="inscricaoestadual" id="inscricaoestadual ">
                </label>

                <label>            
                        <spam>Inscrição Municipal</spam></br> 
                        <input type="text" name="inscricaomunicipal" id="inscricaomunicipal">
                </label>

                <label>            
                        <spam>Situação CNPJ</spam></br> 
                        <input type="text" name="situacao" id="situacao" >
                </label>

                <label>            
                        <spam>Recolhimento</spam></br> 
                        <select  name="recolhimento" id="recolhimento" >
                                <option value="Contribuinte">Selecione</option>
                                <option value="recolher">A Recolher pelo Prestador</option>
                                <option value="retido">Retido pelo Tomador</option>
                        </select>
                </label>

                <label>            
                        <spam>Ativo</spam></br> 
                        <select  name="ativo" id="ativo" >
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
                    <input type="tel" name="telefone" id="telefone" >
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipot" id="tipot">
                            <option value="selecione">Selecione</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Celular">Celular</option>
                    </select>
            </label>

            <label>            
                    <spam>Email</spam></br> 
                    <input type="email" name="email" id="email">
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipoe" id="tipoe">
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
                    <input type="text" name="nomea" id="nomea" >
            </label>

            <label>            
                    <spam>Empresa</spam></br> 
                    <input type="text" name="empresa" id="empresa">
            </label>

            <label>            
                    <spam>Cargo</spam></br> 
                    <input type="text" name="cargo" id="cargo" >
            </label>

            <label>            
                    <spam>Telefone</spam></br> 
                    <input type="tel" name="telefonea" id="telefonea">
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipota" id="tipota" >
                            <option value="selecione">Selecione</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Celular">Celular</option>
                    </select>
            </label>

            <label>            
                    <spam>Email</spam></br> 
                    <input type="email" name="emaila" id="emaila">
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipoea" id="tipoea">
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
                        <input type="text" name="cep" id="cep" >
                </label>

                <label>            
                        <spam>Logradouro</spam></br> 
                        <input type="text" name="rua" id="rua">
                </label>

                <label>            
                        <spam>Numero</spam></br> 
                        <input type="text" name="numero" id="numero" >
                </label>

                <label>            
                        <spam>Complemento</spam></br> 
                        <input type="text" name="complemento" id="complemento">
                </label>

                <label>            
                        <spam>Bairro</spam></br> 
                        <input type="text" name="bairro" id="bairro" >
                </label>

                <label>            
                        <spam>Ponto de Referencia </spam></br> 
                        <input type="text" name="pontoreferencia" id="pontoreferencia" >
                </label>

                <label>            
                        <spam>UF</spam></br> 
                        <select name="uf" id="uf"  data-target="#cidade">
                                        <option value="">Estado</option>
                                    </select>        
                </label>

                <label>            
                        <spam>Cidade</spam></br> 
                        <select  name="cidade" id="cidade"  >
                                <option value="selecione">Selecione</option>
                        </select>        
                </label>

                <label>            
                        <spam>Condominio</spam></br> 
                        <select  name="condominio" id="condominio" >
                                <option value="selecione">Selecione</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                        </select>        
                </label>
           
           
           
        </fieldset>

        <fieldset>
                <legend>Observação</legend>
                <label>            
                        <input type="text" name="observacao" id="observacao" >
                </label>
                
           
           
           
        </fieldset>
        <input type="submit" name="logar" id="logar" value="Cadastrar" class="botao">
    </form>    
</div>


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
/////////////////////////////////////////////////////////////////////////////////
$(document).ready(function() {

function limpa_formulário_cnpj() {
    // Limpa valores do formulário de cnpj.
    $("#razaosocial").val("");
    $("#nomefantasia").val("");
    $("#indicador").val("");
    $("#inscricaoestadual").val("");
    $("#inscricaomunicipal").val("");
    $("#situacao").val("");
    $("#recolhimento").val("");
    $("#ativo").val("");
}

//Quando o campo cnpj perde o foco.
$("#cnpj").blur(function() {

    //Nova variável "cnpj" somente com dígitos.
        var cnpj = $(this).val().replace(/\D/g,"");

    //Verifica se campo cnpj possui valor informado.
    if (cnpj != "") {

        //Expressão regular para validar o CNPJ.
        var validacnpj = /^[0-9]/;

        //Valida o formato do CNPJ.
        if(validacnpj.test(cnpj)) {

            //Preenche os campos com "..." enquanto consulta webservice.
        
        $("#razaosocial").val("...");
        $("#nomefantasia").val("...");
        $("#indicador").val("...");
        $("#situacao").val("...");
            $.getJSON("//receitaws.com.br/v1/cnpj/"+cnpj+"/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                        $("#razaosocial").val(dados.nome);
                        $("#nomefantasia").val(dados.fantasia);
                        $("#situacao").val(dados.situacao); 


                } //end if.
                else {
                    //Cnpj pesquisado não foi encontrado.
                    limpa_formulário_cnpj();
                    alert("CNPJ não encontrado.");
                }
            });
        } //end if.
        else {
            //cnpj é inválido.
            limpa_formulário_cnpj();
            alert("Formato de CNPJ inválido.");
        }
    } //end if.
    else {
        //cnpj sem valor, limpa formulário.
        limpa_formulário_cnpj();
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