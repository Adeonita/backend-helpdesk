<?php
    class Connection {
      $host = "localhost";
      $dataBase = "helpdesk";
      $user = "";
      $password = "";

      $query;
      $link;
      $result;

      public function MySQL(){

      }

      /***Function Connection*/

      public function connect(){

        $this->link = mysqli_connect( $this->host,
                                      $this->user,
                                      $this->password);
        if(!$this->link){
          echo "Falha na conexão<br/>";
          echo "Erro: ".mysqli_error();
          die();
        }elseif(!mysqli_select_db($this->$dataBase, $this->link)){
          echo "O banco de dados solicitado não pode ser aberto!<br/>";
          echo "Erro: ".mysqli_error();
          die();
        }
        else{
          echo "Conectado com sucesso";
        }

      }



    }
?>
