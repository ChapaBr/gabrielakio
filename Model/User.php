<?php 

require_once 'Conn.php';

Class User extends Conn {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $dataCriacao;
    private $dataUpdate;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getDataCriacao(){
        return $this->dataCriacao;
    }

    public function setDataCriacao($dataCriacao){
        $this->dataCriacao = $dataCriacao;
    }

    public function getDataUpdate(){
        return $this->dataUpdate;
    }

    public function setDataUpdate($dataUpdate){
        $this->dataUpdate = $dataUpdate;
    }

    public function login($emailUser, $senhaUser){
        $sql = new Conn();

        $results = $sql->select("SELECT * FROM usuarios WHERE email = :EMAILUSER AND senha = :PASSWORD", [
            ":EMAILUSER" => $emailUser,
            ":PASSWORD"  => $senhaUser
        ]);

        if(count($results) > 0){
            return $this->setData($results[0]);
        } else {
            header('Location: ../login.php?login=error');
            throw new Exception("Login ou senha inválidos.", 1550);
        }
    }

    public function register($nomeUser, $emailUser, $senhaUser){

        $this->setNome($nomeUser);
        $this->setEmail($emailUser);
        $this->setSenha($senhaUser);

        $sql = new Conn();

        $result = $sql->insert("INSERT INTO usuarios (nome, email, senha) VALUES (:NOMEUSER, :EMAILUSER, :SENHAUSER)", [
            ":NOMEUSER" => $nomeUser,
            ":EMAILUSER" => $emailUser,
            ":SENHAUSER"  => $senhaUser
        ]);

        if($result > 0){
            $results = $sql->select("SELECT * FROM usuarios WHERE email = :EMAILUSER AND senha = :PASSWORD", [
                ":EMAILUSER" => $emailUser,
                ":PASSWORD"  => $senhaUser
            ]);
            if(count($results) > 0){
                return $this->setData($results[0]);
            } else {
                header('Location: ../register.php?validated=error');
                throw new Exception("Login ou senha inválidos.", 1550);
            }
        } else {
            header('Location: ../register.php?create=error');
            throw new Exception("Login ou senha inválidos.", 1550);
        }
    }

    public function setData($data){
        $this->setId($data['id']);
        $this->setNome($data['nome']);
        $this->setEmail($data['email']);
        $this->setSenha($data['senha']);
    }

}

?>