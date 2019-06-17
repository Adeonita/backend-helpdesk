<?php

  class Technician extends User{

    private $role;  //Cargo
    private $registration; //Matricula
    private $setor;
    private $login;
    private $password;
    private $area;
    private $type;  //Terceirizado ou efetivo

    public function __construct($atributes){
      if(isset($atributes['id'])){
        $this->setId($atributes['id']);
      }
      $this->setName($atributes['name']);
      $this->setEmail($atributes['email']);
      $this->setCpf($atributes['cpf']);
      $this->setPhone($atributes['phohe']);
      $this->setMessage($atributes['message']);
      $this->role = $atributes['role'];
      $this->registration = $atributes['registration'];
      $this->sector = $atributes['sector'];
      $this->login = $atributes['login'];
      $this->password = $atributes['password'];
      $this->area = $atributes['area'];
      $this->type = $atributes['type'];
    }

    public function getCargo(){
      return $this->cargo;
    }

    public function getMatricula(){
      return $this->matricula;
    }

    public function getSetor(){
      return $this->setor;
    }

    public function getLogin(){
      return $this->setor;
    }

    public function getSenha(){
      return $this->area;
    }

    public function getArea(){
      return $this->area;
    }

    public function getTipo(){
      return $this->tipo;
    }

    /*Sets**/
    public function setCargo($cargo){
      $this->cargo = $cargo;
    }

    public function setMatricula($matricula){
      $this->matricula = $matricula;
    }

    public function setSetor($setor){
      $this->setor = $setor;
    }

    public function setLogin($login){
      $this->login = $login;
    }

    public function setSenha($senha){
      $tis->senha = $senha;
    }

    public function setArea($area){
      $this->area = $area;
    }

    public function setTipo($tipo){
      $this->tipo = $tipo;
    }


  }

?>
