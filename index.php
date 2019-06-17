<?php
  require_once 'includes.php';

  $called = new Called([
    'id' => '1',
    'userId' => '1',
    'area' => 'ti',
    'description' => 'Chamado teste',
    'date' => '2019/06/16',
    'attachment' => 'Anexo teste',
    'status' => 'Pendente',
    'code' => '001',
    'note' => 'Observacao teste'
  ]);

  $connection = new Database();
  $testConnection = $connection->insert($called);
?>
