<?php

  class Technician extends User{

    private $cargo = $_POST['cargo'];
    private $matricula = $_POST['matricula'];
    private $setor = $_POST['setor'];
    private $login = $_POST['login'];
    private $senha = $_POST['senha'];
    private $area = $_POST['area'];
    private $tipo = $_POST['tipo'];

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
