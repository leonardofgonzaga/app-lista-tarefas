<?php 

require '../app-lista-tarefas/models/Conexao.php';
require '../app-lista-tarefas/models/Tarefa.php';
require '../app-lista-tarefas/models/TarefaService.php';

echo '<pre>';
echo print_r($_POST);
echo '</pre>';

$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);
$tarefaService->inserir();

echo '<pre>';
echo print_r($tarefaService);
echo '</pre>';


?>