<?php 
    require_once 'Conn.php';

    class projetos extends Conn {

        private $nomeUser;
        private $prioridade;
        private $linkProjeto;
        private $imgDesktop;
        private $imgMobile;

        public function getNomeUser(){
            return $this->nomeUser;
        }

        public function setNomeUser($nomeUser){
            $this->nomeUser = $nomeUser;
        }

        public function getPrioridade(){
            return $this->prioridade;
        }

        public function setPrioridade($prioridade){
            $this->prioridade = $prioridade;
        }

        public function getLinkProjeto(){
            return $this->linkProjeto;
        }

        public function setLinkProjeto($linkProjeto){
            $this->linkProjeto = $linkProjeto;
        }

        public function getImgDesktop(){
            return $this->imgDesktop;
        }

        public function setImgDesktop($imgDesktop){
            $this->imgDesktop = $imgDesktop;
        }

        public function getImgMobile(){
            return $this->imgMobile;
        }

        public function setImgMobile($imgMobile){
            $this->imgMobile = $imgMobile;
        }

        public function getProjects(){
            $sql = new Conn();

            $results = $sql->select("SELECT * FROM projetos ORDER BY prioridade DESC, dataAtualizacao DESC", []);
    
            if(count($results) > 0){
                return $results;
            } else {
                header('Location: ../home.php?login=error');
                throw new Exception("Login ou senha inválidos.", 1550);
            }
        }

        public function setProject($nomeUser, $prioridade, $linkProjeto, $imgDesktop, $imgMobile){

            $this->setNomeUser($nomeUser);
            $this->setPrioridade($prioridade);
            $this->setLinkProjeto($linkProjeto);
            $this->setImgDesktop($imgDesktop);
            $this->setImgMobile($imgMobile);

            $sql = new Conn();

            $result = $sql->insert("INSERT INTO projetos (nomeProjeto, prioridade, imgDesktop, imgMobile, linkProjeto) VALUES (:NOMEPROJETO, :PRIORIDADE, :IMGDESKTOP, :IMGMOBILE, :LINKPROJETO)", [
                ":NOMEPROJETO" => $this->getNomeUser(),
                ":PRIORIDADE" => $this->getPrioridade(),
                ":IMGDESKTOP" => $this->getImgDesktop(),
                ":IMGMOBILE" => $this->getImgMobile(),
                ":LINKPROJETO" => $this->getLinkProjeto(),
            ]);

            if($result > 0){
                header('Location: ../home.php?projeto=success');
            } else {
                header('Location: ../home.php?projeto=error');
            }
        }
    }
?>