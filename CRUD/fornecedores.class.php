<?php
//ESTE NÂO ESTA FUNCIONANDO, IR ATE 'OP_FORCENCEDORES'
    class Fornecedores{

        private $pdo;
        
        public function __construct(){
            $this->pdo = new PDO("mysql:dbname=desafiovercan;host=localhost","root","");
        }

        public function adicionar(   
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
            $observacao= ''
            //$cpf= '',
            //$nome= '',
           // $apelido= ''


        ){
            if($this->existeCnpj($cnpj) == false){
                $sql = "INSERT INTO fornecedores (
                    cnpj,razaosocial,nomefantasia,indicador,
                    inscricaoestadual,inscricaomunicipal,situacao,recolhimento,ativo,telefone,tipot,email,tipoe,

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
                $sql->bindValue(':telefone',$telefone);
                $sql->bindValue(':email',$email);
                $sql->bindValue(':tipoe',$tipoe);
                $sql->bindValue(':numero',$numero);
                $sql->bindValue(':complemento',$complemento);
                $sql->bindValue(':bairro',$bairro);
                $sql->bindValue(':pontoreferencia',$pontoreferencia);
                $sql->bindValue(':uf',$uf);
                $sql->bindValue(':cidade',$cidade);
                $sql->bindValue(':condominio',$condominio);
                $sql->bindValue(':observacao',$observacao);
                $sql->execute();

            }else{
                return false;
            }


        }

        public function getInfo($id_fornecedores){
            $sql = "SELECT * FROM fornecedores WHERE id_fornecedores = :id_fornecedores";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_fornecedores',$id_fornecedores);
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }else{
                return array();
            }
        }

       
        public function getAll(){
                $sql = "SELECT * FROM fornecedores";
                $sql =$this->pdo->query($sql);

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

        public function excluir($id_fornecedores){
            
                $sql = "DELETE FROM fornecedores WHERE id_fornecedores = :id_fornecedores";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id_fornecedores',$id_fornecedores);
                $sql->execute();                
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