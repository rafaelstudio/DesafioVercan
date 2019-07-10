<?php

    class Fornecedores{

        private $pdo;
        
        public function __construct(){
            $this->pdo = new PDO("mysql:dbname=desafiovercan;host=localhost","root","");
        }

        public function adicionar(
            
            $id_fornecedores,
            $cnpj,
            $razaosocial = '',
            $nomefantasia= '',
            $indicador= '',
            $inscricaoestadual= '',
            $inscricaomunicipal= '',
            $sitsituacao= '',
            $recolhimento= '',
            $ativo= '',
            $telefone = '',
            $tipot= '',
            $email= '',
            $tipoe= '',
            $nomea= '',
            $empresa= '',
            $cargo= '',
            $telefonea= '',
            $tipota= '',
            $emaila= '',
            $tipoea= '',
            $cep= '',
            $logradouro= '',
            $numero= '',
            $complemento= '',
            $bairro= '',
            $pontoreferencia= '',
            $uf= '',
            $cidade= '',
            $condominio= '',
            $observacao= '',
            //$cpf= '',
            //$nome= '',
           // $apelido= ''


        ){
            if($this->existeCnpj($cnpj) == false){
                $sql = "INSERT INTO fornecedores (
                    cnpj,razaosocial,nomefantasia,indicador,
                    inscricaoestadual,inscricaomunicipal,situacao,recolhimento,ativo,telefone,tipot,email,tipoe,
                    nomea,empresa,cargo,telefonea,tipota,emaila,tipoea,cep,logradouro,
                    numero,complemento,bairro,pontoreferencia,uf,cidade,condominio,observacao

                ) VALUES (
                    :cnpj,:razaosocial,:nomefantasia,:indicador,
                    :inscricaoestadual,:inscricaomunicipal,:situacao,:recolhimento,:ativo,:telefone,:tipot,:email,:tipoe,
                    :nomea,:empresa,:cargo,:telefonea,:tipota,:emaila,:tipoea,:cep,:logradouro,
                    :numero,:complemento,:bairro,:pontoreferencia,:uf,:cidade,:condominio,:observacao
                )";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':cnpj',$cnpj);
                $sql->bindValue(':razaosocial',$razaosocial);
                $sql->bindValue(':nomefantasia',$nomefantasia);
                $sql->bindValue(':indicador',$indicador);
                $sql->bindValue(':inscricaoestadual',$inscricaoestadual);
                $sql->bindValue(':inscricaomunicipal',$inscricaomunicipal);
                $sql->bindValue(':sitsituacao',$sitsituacao);
                $sql->bindValue(':recolhimento',$recolhimento);
                $sql->bindValue(':ativo',$ativo);
                $sql->execute();

            }else{
                return false;
            }


        }

        public function dadosJuridico($razaosocial,$nomefantasia,$cnpj,$ativo){
            $sql  = "SELECT razaosocial,nomefantasia,cnpj,ativo FROM fornecedores WHERE id_fornecedores= :id_fornecedores";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':razaosocial',$razaosocial);
            $sql->bindValue(':nomefantasia',$nomefantasia);
            $sql->bindValue(':cnpj',$cnpj);
            $sql->bindValue(':ativo',$ativo);
            $sql->execute();

            if($sql->rowCount() > 0){
                $info = $sql->fetch();

                return $info['razaosocial'];
            }else{
                return '';
            }
        }

        public function getAll(){
                $sql = "SELECT * FROM fornecedores";
                $sql->$pdo->query($sql);

                if($sql->rowCount() > 0){
                    return $sql->fetchAll();
                }else{
                    return array();
                }
        }

        public function editar($razaosocial,$cnpj){
            if($this->existeCnpj($cnpj)){
                $sql = "UPDATE fornecedores SET rezaosocial = :razaosocial WHERE cnpj = :cnpj";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':rezaosocial',$razaosocial);
                $sql->bindValue(':cnpj',$cnpj);
                $sql->execute();

                return true;
            }else{
                return false;
            }
        }

        public function excluir($cnpj){
            if($this->existeCnpj($cnpj)){
                $sql = "DELETE * FROM fornecedores WHERE cnpj = :cnpj";
                $sql= $this->pdo->prepare($sql);
                $sql->bindValue('cnpj',$cnpj);
                $sql->execute();

                return true;
            }else{
                return false;
            }
        }


        private function existeCnpj($cnpj){
            $sql = "SELECT * FROM fornecedores WHERE cnpj = :cnpj";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':cnpj',$cnpj);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else {
                return false;
            }
        }

        

    }

?>