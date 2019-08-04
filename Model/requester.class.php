<?php

  class Requester extends User{

      public function __construct($attributes){
        $this->setId($attributes['id']);
        $this->setName($attributes['name']);
        $this->setEmail($attributes['email']);
        $this->setCpf($attributes['cpf']);
        $this->setPhone($attributes['phone']);
      }

  }
?>
