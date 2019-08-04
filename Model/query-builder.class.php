<?php

  require_once 'includes.php';

  class QueryBuilder {

    /**Função que retorna uma Query de inserção
    ** @param $tableName nome da tabela
    **        $attributes atributos do objeto
    ** Pego o nome da entidade que será o mesmo nome da tabela, as Keys do array
    ** attribute são as colunas e os Values são os valores.
    ** A captura de dados acontece genericamente para todas as entidades e no final é retornada
    ** uma query de inserção no banco de dados
    */
    public function queryInsert($tableName, $attributes){

      $columns = "";
      $values = "";

      foreach($attributes as $column => $value){
        if(!empty($value)){
          $columns =  $columns.$column.',';   //Separo todas as palavras por virgula
          $values = $values.'"'.$value.'",';  //Separo todas por vírgula e insiro aspas
        }
      }

      $columns = substr_replace($columns, '', -1); //Removo a última virgula
      $values = substr_replace($values, '', -1);  //Removo a última virgula

      return "INSERT INTO $tableName ($columns) VALUES ($values)";

    }
  }


?>
