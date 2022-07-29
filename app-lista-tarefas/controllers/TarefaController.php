<?php 

require '../app-lista-tarefas/models/Conexao.php';
require '../app-lista-tarefas/models/Tarefa.php';
require '../app-lista-tarefas/models/TarefaService.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();

    header('Location: nova_tarefa.php?inclusao=1');

} elseif ($acao == 'recuperar') {

    $tarefa = new Tarefa();
    $conexao = new Conexao();
    $tarefaService = new TarefaService($conexao, $tarefa);

    $tarefas = $tarefaService->recuperar();

} elseif ($acao == 'atualizar') {
    
    $tarefa = new Tarefa();
    $tarefa->__set('id', $_POST['id']);
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);    
    $tarefaService->atualizar();
    
    verificarPagina();

} elseif ($acao == 'remover') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);    
    $tarefaService->remover();

    verificarPagina();
    
} elseif ($acao == 'marcarRealizada') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id']);
    $tarefa->__set('id_status', 2);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);    
    $tarefaService->marcarRealizada();

    verificarPagina();
    
}

elseif ($acao == 'recuperarTarefasPendentes') {

    $tarefa = new Tarefa();
    $tarefa->__set('id_status', 1);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefas = $tarefaService->recuperarTarefasPendentes();
    
}

function verificarPagina() {

    if(isset($_GET['pag']) && $_GET['pag'] == 'index') {

        header('Location: index.php');    

    } else {

        header('Location: todas_tarefas.php');    
        
    }

}

?>