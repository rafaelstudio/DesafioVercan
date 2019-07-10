<?php
session_start();
require 'CRUD/config.php';

if(isset($_POST['email']) && empty($_POST['email']) == false){
   $email = addslashes($_POST['email']);
   $senha = addslashes($_POST['senha']);

    $sql =$pdo->prepare(" SELECT * FROM usuarios WHERE email=:email AND senha=:senha ");

    $sql->bindValue(":email",$email);
    $sql->bindValue(":senha",$senha);
    $sql->execute();

    if($sql->rowCount() > 0 ){
            $sql = $sql->fetch();

            $_SESSION['logado'] = $sql['id'];
            header("Location: index.php");
        }
   }

?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Desafio Vercan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="all" href="style-admin.css" />
    </head>
    <body>
        <div class="box-login">
            <div id="formulariologin">
                <form  method="post">
                    <fieldset>
                        <legend>Faça Login</legend>
                            <label>
                                <span>Login</span>
                                <input type="text" name="email" >
                            </label> 

                            <label>
                                <span>Senha</span>
                                <input type="password" name="senha" >
                            </label>

                            <input type="submit" name="logar" id="logar" value="Entrar" class="botao">
                    </fieldset>
                </form>
            </div>
        </div>
        
    </body>
</html>

