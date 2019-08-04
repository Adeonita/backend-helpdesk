<?php
  require_once 'includes.php';

  $called = new Called([
    'id' => '',
    'userId' => '1',
    'area' => 'ti',
    'description' => 'Chamado teste',
    'date' => '2019/06/16',
    'attachment' => 'Anexo teste',
    'status' => 'Pendente',
    'code' => '001',
    'note' => 'Observacao teste'
  ]);

  $user = new Requester([
    'id' => '',
    'name' => 'Teste',
    'email' => 'teste@teste.com',
    'cpf' => '00000000000',
    'phone' => '000000000000'
  ]);

  $connection = new Database();
  $chamado = $connection->insert($called);
  $usuario = $connection->insert($user);

?>
