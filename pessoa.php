<?php

class Pessoa{
    private $nome;
    private $email;
    private $cpf;
    private $senha;
    private $tel;
    private $cep;
    private $idade;
    private $rg;
    private $id;


    public function getNome(){
        return $this -> nome;
    }

    public function setNome($valor){
        $this->nome = $valor;
    }



   
    public function getEmail(){
        return $this -> email;
    }

    public function setEmail($valor){
        $this->email = $valor;
    }



   
    public function getCpf(){
        return $this -> cpf;
    }

    public function setCpf($valor){
        $this->cpf = $valor;
    }



   
    public function getSenha(){
        return $this -> senha;
    }

    public function setSenha($valor){
        $this->senha = $valor;
    }



   
    public function getTel(){
        return $this -> tel;
    }

    public function setTel($valor){
        $this->tel = $valor;
    }



   
    public function getCep(){
        return $this -> cep;
    }

    public function setCep($valor){
        $this->cep = $valor;
    }



   
    public function getIdade(){
        return $this -> idade;
    }

    public function setIdade($valor){
        $this->idade = $valor;
    }



   
    public function getRg(){
        return $this -> rg;
    }

    public function setRg($valor){
        $this->rg = $valor;
    }



   
    public function getId(){
        return $this -> id;
    }

    public function setId($valor){
        $this->id = $valor;
    }   

}
