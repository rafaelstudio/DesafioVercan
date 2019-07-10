<?php
     include "CRUD/config.php";


?>


<div class="forn_body">

    <a href="index.php?link=10">
        <Button>CADASTRAR</Button>    
    </a>

    <table width="100%" border="1" cellpadding="0" cellspacing="1" >
        <tr bgcolor="#993300">
            <td width="30%" height="20">Razao Social/Nome</td>
            <td width="30%" height="20">Nome Fantasia/Apelido</td>
            <td width="20%" height="20">CNPF/CPF</td>
            <td width="10%" height="20">Ativo</td>
            <td colspan="2" width="10%" height="20">Acao</td>
        </tr>

        <?php 
						$sql = "SELECT  * FROM fornecedores";
						$qry = mysql_query($sql);

						while ($linha = mysql_fetch_array($qry)) {
						

		?>

        <tr bgcolor="#fff">
                <td ><?php echo $linha[razaosocial]?></td>
                <td><?php echo $linha[nomefantasia]?></td>
                <td><?php echo $linha[cnpj]?></td>
                <td><?php echo $linha[ativo]?></td>
                <td><a href="index.php?link=10&acao=Alterar&id=<?php echo $linha[razaosocial]?>">    Editar  </a></td>
                <td><a href="index.php?link=10&acao=Excluir&id=<?php echo $linha[razaosocial]?>">    Excluir </a></td>
            
        </tr>

        <?php }  ?>

        <tr bgcolor="#993300">
                <td width="30%" height="20">Razao Social/Nome</td>
                <td width="30%" height="20">Nome Fantasia/Apelido</td>
                <td width="20%" height="20">CNPF/CPF</td>
                <td width="10%" height="20">Ativo</td>
                <td colspan="2" width="10%" height="20">Acao</td>
            </tr>

    </table>
 
    
</div>