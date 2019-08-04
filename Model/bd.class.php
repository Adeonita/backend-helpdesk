<?php

  require_once 'Config/database.php';
  require_once 'includes.php';

  class Database{

    public function getConnection(){

      $connection = new mysqli(HOST, USER, PASSWORD, DATABASE);

      if ($connection->connect_errno){
        echo "Falha na conexão do banco: " . $connection->connect_error;
      }

      return $connection;
    }

    public function insert($entity){
      $name_entity = get_class($entity); //Pega o nome da classe
      $name_entity = $this->snake_case($name_entity)."s"; //Converte o nome da classe de CamelCase para snake_case (Padrão para banco de dados)
      $attributes = $this->getAttributes($entity); // Pega os atributos da classe
      $connection = $this->getConnection(); // Cria a conexão com o banco
      $builder = new QueryBuilder();
      $query = $builder->queryInsert($name_entity, $attributes);
      var_dump($attributes);
      if($connection->query($query)){
        echo "inserido com sucesso<br>";
      }else{
        echo $connection->error;
      }
    }

    public function update(){

    }

    public function select(){

    }

    public function delete(){

    }

    /*
      Esta função retorna um array contendo os nomes e valores de todos os atributos de
      determinada classe.
    */
    private function getAttributes($entity){
      $reflection = new ReflectionClass($entity); //Instancia a classe que faz o reconhecimento da estrutura do objeto
      $result = [];
      if($reflection->getParentClass()){
        $parent = false;
        do {
          if( $parent  )
            $result = array_merge($result, $this->getAttributesClass($parent, $entity));
        }while($parent = $reflection->getParentClass());
      }else{
        $result = $this->getAttributesClass($reflection, $entity);
      }
      return $result;
    }

    public function getAttributesClass(ReflectionClass $reflection, $entity) {
      $data = $reflection->getProperties(ReflectionProperty::IS_PRIVATE); //Pega todos os nomes dos atributos privados da classe em questão
      $result = []; //Crio um array pra guardar os nomes e valores dos atributos
      foreach ($data as $attribute) { //Percorro os nomes dos atributos do objeto passado 'entity'
        $name = $attribute->name; //Pego o nome
        /*
          Crio um índice no array result cujo nome é o atributo e o valor é o valor do atributo.
          Para pegar o valor do atributo, uso a função getAtributo, onde gero em tempo real o nome da função
          sendo assim obrigatório que o método get do atributo seja exatamente getNomeDoAtributo.
          Para executar a função uso uma outra função chamada call_user_func e passo o objeto e a função do objeto
          que será executada.
        */
        $result[$name] = call_user_func([$entity, "get" . ucfirst($name)]);
      }
      return $result;
    }

    private function snake_case($input) {
      preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
      $ret = $matches[0];
      foreach ($ret as &$match) {
        $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
      }
      return implode('_', $ret);
    }

  }




?>
