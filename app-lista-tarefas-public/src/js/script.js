function editar(id, txt_tarefa) {

    // Criar um fomr de edição
    let form = document.createElement('form')
    form.action = 'index.php?pag=index&acao=atualizar'
    form.method = 'post'
    form.className = 'row'

    // Criar um input para entrada de texto
    let inputTarefa = document.createElement('input')
    inputTarefa.type = 'text'
    inputTarefa.name = 'tarefa'
    inputTarefa.className = 'col-9 form-control'   
    inputTarefa.value = txt_tarefa 

    // Criar um input hidden
    let inputId = document.createElement('input')
    inputId.type = 'hidden'
    inputId.name = 'id'
    inputId.value = id

    // Criar um button para envio dp form
    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'col-3 btn btn-info'
    button.innerHTML = 'Atualizar'    
    button.style.height = "38px"

    // Incluir elemtos no form
    form.appendChild(inputTarefa)
    form.appendChild(inputId)
    form.appendChild(button)

    // Selecionar div
    let tarefa = document.getElementById('tarefa_' + id)

    // Limpar o texto para inclusão do form
    tarefa.innerHTML = ''

    // Incluir form
    tarefa.insertBefore(form, tarefa[0])

}

function remover(id) {

    location.href = 'index.php?pag=index&acao=remover&id='+id;

}

function marcarRealizada(id) {

    location.href = 'index.php?pag=index&acao=marcarRealizada&id='+id;

}