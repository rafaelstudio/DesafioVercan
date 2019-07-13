<?php
    require 'config.php';
    include 'fornecedores.class.php';
    $fornecedor = new Fornecedores(); 

    if(!empty($_GET['id_fornecedores'])){
        $id_fornecedores = $_GET['id_fornecedores'];

        $info = $fornecedor->getInfo($id_fornecedores);

        if(empty($info['id_fornecedores'])){
            header("Location: ../index.php?link=3");
             exit;
        }
        
    }else{
        header("Location: ../index.php?link=3");
        exit;
    }
    


?>
<div id="box-Cadastro">
    <form id="frmFornecedores" name="frmFornecedores" method="POST" action="CRUD/editar_submit.php">
        <fieldset>
            <legend> Dados do Fornecedor </legend>

                 <input type="hidden" name="id_fornecedores" id="id_fornecedores" value="<?php echo $info['id_fornecedores'];?>" >
                <label>            
                    <spam>CNPJ </spam></br> 
                    <input type="text" name="cnpj" id="cnpj" value="<?php echo $info['cnpj'];?>" >
                </label>

                <label>            
                        <spam>Razão Social</spam></br> 
                        <input type="text" name="razaosocial" id="razaosocial"  value="<?php echo $info['razaosocial'];?>" >
                </label>

                <label>            
                        <spam>Nome Fantasia</spam></br> 
                        <input type="text" name="nomefantasia" id="nomefantasia" value="<?php echo $info['nomefantasia'];?>" >
                </label>

                <label>            
                        <spam>Indicador de Inscrição Estadual</spam></br> 
                        <select  name="indicador" id="indicador">
                                <option ><?php echo $info['indicador'];?></option>
                                <option >Contribuinte</option>
                                <option >Contribuinte Isento</option>
                                <option >Não Contribuinte</option>
                        </select>
                </label>

                <label>            
                        <spam>Inscrição Estadual</spam></br> 
                        <input type="text" name="inscricaoestadual" id="inscricaoestadual" value="<?php echo $info['inscricaoestadual'];?>" >
                </label>

                <label>            
                        <spam>Inscrição Municipal</spam></br> 
                        <input type="text" name="inscricaomunicipal" id="inscricaomunicipal" value="<?php echo $info['inscricaomunicipal'];?>" >
                </label>

                <label>            
                        <spam>Situação CNPJ</spam></br> 
                        <input type="text" name="situacao" id="situacao" value="<?php echo $info['situacao'];?>" >
                </label>

                <label>            
                        <spam>Recolhimento</spam></br> 
                        <select  name="recolhimento" id="recolhimento"  >
                                <option value="selecione"><?php echo $info['recolhimento'];?></option>
                                <option value="recolher">A Recolher pelo Prestador</option>
                                <option value="retido">Retido pelo Tomador</option>
                        </select>
                </label>

                <label>            
                        <spam>Ativo</spam></br> 
                        <select  name="ativo" id="ativo"  >
                                <option value="selecione"><?php echo $info['ativo'];?></option>
                                <option >Sim</option>
                                <option >Não</option>
                        </select>
                </label>



        </fieldset>

        <fieldset>
            <legend>Contato Principal </legend>

            <label>            
                    <spam>Telefone</spam></br> 
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $info['telefone'];?>" >
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipot" id="tipot"  >
                            <option value="selecione"><?php echo $info['tipot'];?></option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Celular">Celular</option>
                    </select>
            </label>

            <label>            
                    <spam>Email</spam></br> 
                    <input type="email" name="email" id="email" value="<?php echo $info['email'];?>" >
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipoe" id="tipoe" >
                            <option value="selecione"><?php echo $info['tipoe'];?></option>
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
                    <input type="text" name="nomea" id="nomea" value="<?php echo $info['nomea'];?>" >
            </label>

            <label>            
                    <spam>Empresa</spam></br> 
                    <input type="text" name="empresa" id="empresa" value="<?php echo $info['empresa'];?>" >
            </label>

            <label>            
                    <spam>Cargo</spam></br> 
                    <input type="text" name="cargo" id="cargo" value="<?php echo $info['cargo'];?>" >
            </label>

            <label>            
                    <spam>Telefone</spam></br> 
                    <input type="tel" name="telefonea" id="telefonea" value="<?php echo $info['telefonea'];?>" >
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipota" id="tipota"  >
                            <option value="selecione"><?php echo $info['tipota'];?></option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Celular">Celular</option>
                    </select>
            </label>

            <label>            
                    <spam>Email</spam></br> 
                    <input type="email" name="emaila" id="emaila" value="<?php echo $info['emaila'];?>" >
            </label>

            <label>            
                    <spam>Tipo</spam></br> 
                    <select  name="tipoea" id="tipoea"  >
                            <option value="selecione"><?php echo $info['tipoea'];?></option>
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
                        <input type="text" name="cep" id="cep" value="<?php echo $info['cep'];?>" >
                </label>

                <label>            
                        <spam>Logradouro</spam></br> 
                        <input type="text" name="rua" id="rua" value="<?php echo $info['rua'];?>" >
                </label>

                <label>            
                        <spam>Numero</spam></br> 
                        <input type="text" name="numero" id="numero" value="<?php echo $info['numero'];?>" >
                </label>

                <label>            
                        <spam>Complemento</spam></br> 
                        <input type="text" name="complemento" id="complemento" value="<?php echo $info['complemento'];?>" >
                </label>

                <label>            
                        <spam>Bairro</spam></br> 
                        <input type="text" name="bairro" id="bairro" value="<?php echo $info['bairro'];?>"  >
                </label>

                <label>            
                        <spam>Ponto de Referencia </spam></br> 
                        <input type="text" name="pontoreferencia" id="pontoreferencia" value="<?php echo $info['pontoreferencia'];?>"  >
                </label>

                <label>            
                        <spam>UF</spam></br> 
                        <select name="uf" id="uf"  data-target="#cidade" value="<?php echo $info['uf'];?>" >
                                        <option value="">Estado</option>
                                    </select>        
                </label>

                <label>            
                        <spam>Cidade</spam></br> 
                        <select  name="cidade" id="cidade"  value="<?php echo $info['cidade'];?>" >
                                <option value="selecione">Selecione</option>
                        </select>        
                </label>

                <label>            
                        <spam>Condominio</spam></br> 
                        <select  name="condominio" id="condominio" >
                                <option value="selecione"><?php echo $info['condominio'];?></option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                        </select>        
                </label>
           
           
           
        </fieldset>

        <fieldset>
                <legend>Observação</legend>
                <label>            
                        <input type="text" name="observacao" id="observacao" value="<?php echo $info['observacao'];?>" >
                </label>
                
           
           
           
        </fieldset>
        <input type="submit" name="logar" id="logar" value="Salvar" class="botao">
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