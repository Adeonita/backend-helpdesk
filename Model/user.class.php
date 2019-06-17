<?php

  abstract class User {

    private $id;
    private $name;
    private $email;
    private $cpf;
    private $phone;
    private $menssage;

    public function getId(){
      return $this->name;
    }

    public function getName(){
      return $this->name;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getCpf(){
      return $this->cpf;
    }
    public function getPhone(){
      return $this->phone;
    }

    public function getMessage(){
      return $this->message;
    }

    /**Sets*/
    public function setId($id){
      $this->name = $id;
    }
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
