<?php
    class Fornecedores{

        private $pdo;
        
        public function __construct(){
            $this->pdo = new PDO("mysql:dbname=desafiovercan;host=localhost","root","");
        }

        public function adicionar(   
            $cnpj,$razaosocial,$nomefantasia,$indicador,$inscricaomunicipal,$inscricaoestadual,$situacao,
            $recolhimento,$ativo,$telefone,$tipot,$email,$tipoe,$nomea,$empresa,$cargo,$telefonea,
            $tipota,$emaila,$tipoea,$cep,$rua,$numero,$complemento,$bairro,$pontoreferencia,$uf,
            $cidade,$condominio,$observacao

        ){
            if($this->existeCnpj($cnpj) == false){               

                $sql = $this->pdo->prepare("INSERT INTO fornecedores SET
                cnpj = :cnpj,razaosocial = :razaosocial,nomefantasia = :nomefantasia,indicador =:indicador,
                inscricaomunicipal=:inscricaomunicipal,inscricaoestadual =:inscricaoestadual,
                situacao=:situacao,recolhimento=:recolhimento,ativo=:ativo,telefone=:telefone,tipot=:tipot,
                email=:email,tipoe=:tipoe,nomea=:nomea,empresa=:empresa,cargo=:cargo,
                telefonea=:telefonea,tipota=:tipota,emaila=:emaila,tipoea=:tipoea,cep=:cep,rua=:rua,
                numero=:numero,complemento=:complemento,bairro=:bairro,pontoreferencia=:pontoreferencia,
                uf=:uf,cidade=:cidade,condominio=:condominio,observacao=:observacao");

                $sql->bindValue(':cnpj',$cnpj);
                $sql->bindValue(':razaosocial',$razaosocial);
                $sql->bindValue(':nomefantasia',$nomefantasia);
                $sql->bindValue(':indicador',$indicador);
                $sql->bindValue(':inscricaomunicipal',$inscricaomunicipal);
                $sql->bindValue(':inscricaoestadual',$inscricaoestadual);
                $sql->bindValue(':situacao',$situacao);
                $sql->bindValue(':recolhimento',$recolhimento);
                $sql->bindValue(':ativo',$ativo);
                $sql->bindValue(':telefone',$telefone);
                $sql->bindValue(':tipot',$tipot);
                $sql->bindValue(':email',$email);
                $sql->bindValue(':tipoe',$tipoe);
                $sql->bindValue(':nomea',$nomea);
                $sql->bindValue(':empresa',$empresa);
                $sql->bindValue(':cargo',$cargo);
                $sql->bindValue(':telefonea',$telefonea);
                $sql->bindValue(':tipota',$tipota);
                $sql->bindValue(':emaila',$emaila);
                $sql->bindValue(':tipoea',$tipoea);
                $sql->bindValue(':cep',$cep);
                $sql->bindValue(':rua',$rua);
                $sql->bindValue(':numero',$numero);
                $sql->bindValue(':complemento',$complemento);
                $sql->bindValue(':bairro',$bairro);
                $sql->bindValue(':pontoreferencia',$pontoreferencia);
                $sql->bindValue(':uf',$uf);
                $sql->bindValue(':cidade',$cidade);
                $sql->bindValue(':condominio',$condominio);
                $sql->bindValue(':observacao',$observacao);
                $sql->execute();

                return true;

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

        public function editar($cnpj,$razaosocial,$nomefantasia,$indicador,$inscricaoestadual,  $id_fornecedores){
                if($this->existeCnpj($cnpj) == false ){                
                    $sql = $this->pdo->prepare("UPDATE fornecedores SET cnpj = :cnpj,
                                                razaosocial =:razaosocial,
                                                nomefantasia=:nomefantasia,
                                                indicador=:indicador,
                                                inscricaoestadual=:inscricaoestadual
                    
                    
                    
                    WHERE id_fornecedores = :id_fornecedores");
                    $sql->bindValue(':cnpj',$cnpj);
                    $sql->bindValue(':razaosocial',$razaosocial);
                    $sql->bindValue(':nomefantasia',$nomefantasia);
                    $sql->bindValue(':indicador',$indicador);
                    $sql->bindValue(':inscricaoestadual',$inscricaoestadual);
                    $sql->bindValue(':id_fornecedores',$id_fornecedores);
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