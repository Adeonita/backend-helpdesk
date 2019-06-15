<?php

  private $id;
  private $area = $_POST['area'];
  private $description = $_POST['description'];
  private $dateandHour;
  private $attachment = $_POST['attachment'];
  private $status = 'pendente';
  private $code = $_POST['code'];
  private $note = $_POST['note'];

  /**Métodos que pegam os conteúdps*/
  public function getArea(){
    return $this->area;
  }

  public function getDescription(){
    return $this->description;
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
  public function setArea($area){
    $this->area = $area;
  }

  public function setDescription($description){
    $this->description = $description;
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
?>
