<?php

  class User {

    private $id;
    private $name = $_POST['name'];
    private $email = $_POST['email'];
    private $cpf = $_POST['cpf'];
    private $phone = $_POST['phone'];
    private $menssage = $_POST['menssage'];

    public function getName(){
      return $this->name;
    }

    public function getEmail(){
      return $this->email
    }

    public function getCpf(){
      return $this->Cpf;
    }

    public function getPhone(){
      return $this->phone;
    }

    public function getMessage(){
      return $this->message;
    }

    /**Sets*/
    public function setName($name){
      $this->name = $name;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function setCpf($cpf){
      $this->cpf = $cpf;
    }

    public function setPhone($phone){
      $this->phone = $phone;
    }

    public function setMessage($message){
      $this->message =  $message;
    }
    
  }
?>
