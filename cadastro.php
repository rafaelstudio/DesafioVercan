<?php 
        include "CRUD/config.php";

        $acao   = $_GET["acao"];
        $id     = $_GET["id"];
    
      if ($acao =="inserir" || $acao =="alterar" || $acao =="excluir"){
    
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
                        <input type="text" name="txt_cep" id="txt_cep" value="<?php echo $linha['cep']; ?>">
                </label>

                <label>            
                        <spam>Logradouro</spam></br> 
                        <input type="text" name="txt_logradouro" id="txt_logradouro" value="<?php echo $linha['logradouro']; ?>">
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
                        <input type="text" name="txt_bairro" id="txt_bairro" value="<?php echo $linha['bairro']; ?>">
                </label>

                <label>            
                        <spam>Ponto de Referencia </spam></br> 
                        <input type="text" name="txt_pontoreferencia" id="txt_pontoreferencia" value="<?php echo $linha['pontoreferencia']; ?>">
                </label>

                <label>            
                        <spam>UF</spam></br> 
                        <select  name="txt_uf" id="txt_uf" value="<?php echo $linha['uf']; ?>">
                                <option value="selecione">Selecione</option>
                        </select>         
                </label>

                <label>            
                        <spam>Cidade</spam></br> 
                        <select  name="txt_cidade" id="txt_cidade" value="<?php echo $linha['cidade']; ?>">
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
        <input type="hidden" name="acao" value="<?php if ($acao !=""){echo $acao;}else{echo"Inserir";} ?>">
        <input type="submit" name="logar" id="logar" value="<?php if ($acao !=""){echo $acao;}else{echo"Inserir";} ?>" class="botao">
    </form>    
</div>
<!------------Requisicao para preencher o endereco-->!>
<Script>
       function retornaEndereco(){
                $("txt_cep").focusout(function(){
                        var cep = $("#txt_cep").val();
                        cep = cep.replace("-","");
                        var urlStr = "https://viacep.com.br/ws/"+ cep +"/json/";
                        $.ajax({
                                url:urlStr,
                                type:"get",
                                dataType:"json",
                                success : function(data){
                                        console.log(data);
                                        $("txt_cidade").val(data.localidade);
                                        $("txt_uf").val(data.uf);
                                        $("txt_bairro").val(data.bairro);
                                        $("txt_logradouro").val(data.logradouro);
                                },
                                error:function(erro){
                                        console.log(erro);


                                }
                        });
                });
        };

</Script>