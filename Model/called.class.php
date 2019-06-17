<?php

  class Called{

    private $id;
    private $userId;
    private $area;
    private $description;
    private $date;
    private $attachment;
    private $status;
    private $code;
    private $note;

    public function __construct($atributes){
      $this->id = $atributes['id'];
      $this->userId = $atributes['userId'];
      $this->area = $atributes['area'];
      $this->description = $atributes['description'];
      $this->date = $atributes['date'];
      $this->attachment = $atributes['attachment'];
      $this->status = $atributes['status'];
      $this->code = $atributes['code'];
      $this->note = $atributes['note'];
    }

    /**Métodos que pegam os conteúdos*/
    public function getUserId(){
      return $this->userId;
    }

    public function getId(){
      return $this->id;
    }

    public function getArea(){
      return $this->area;
    }

    public function getDescription(){
      return $this->description;
    }

    public function getDate(){
      return $this->date;
    }

    public function getAttachment(){
      return $this->attachment;
    }

    public function getStatus(){
      return $this->status;
    }

    public function getCode(){
      return $this->code;
    }

    public function getNote(){
      return $this->note;
    }

    /**Métodos que modificam os conteúdos*/

    public function setUserId($UserId){
      $this->userId = $userId;
    }

    public function setId($id){
      $this->id = $id;
    }
    public function setArea($area){
      $this->area = $area;
    }

    public function setDescription($description){
      $this->description = $description;
    }

    public function setDate($date){
      $this->date = $date;
    }

    public function setAttachment($attachment){
      $this->attachment;
    }

    public function setStatus($status){
      $this->status = $status;
    }

    public function setCode($code){
      $this->status = $status;
    }

    public function setNote($note){
      $this->note = $note;
    }
  }
?>
