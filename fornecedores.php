<?php
     require 'CRUD/config.php';
     include 'CRUD/fornecedores.class.php';
     $fornecedor = new Fornecedores;

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
            $lista = $fornecedor->getAll();
            foreach($lista as $item):
        
        
        ?>


        <tr bgcolor="#fff">
                <td ><?php echo $item['razaosocial']?></td>
                <td><?php echo $item['nomefantasia']?></td>
                <td><?php echo $item['cnpj']?></td>
                <td><?php echo $item['situacao']?></td>
                <td>
                     <a href="index.php?link=11&id_fornecedores=<?php echo $item['id_fornecedores'];?>">    Editar </a>
                     <a href="CRUD/excluir.php?id_fornecedores=<?php echo $item['id_fornecedores'];?>">    Excluir </a>
                </td>
            
        </tr>

            <?php endforeach; ?>

        <tr bgcolor="#993300">
                <td width="30%" height="20">Razao Social/Nome</td>
                <td width="30%" height="20">Nome Fantasia/Apelido</td>
                <td width="20%" height="20">CNPF/CPF</td>
                <td width="10%" height="20">Ativo</td>
                <td colspan="2" width="10%" height="20">Acao</td>
            </tr>

    </table>
 
    
</div>