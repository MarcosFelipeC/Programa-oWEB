function validar() {
    //pegando o nome
    var nome = document.getElementById('nome').value;

    //pegando o email
    var email = document.getElementById('email').value;

    //pegando sexo
    var sexo = document.getElementById('sexo').value;

    var estado = document.getElementById('estado').value;
    var cidade = document.getElementById('cidade').value;

    if (nome === "" || email === "" || estado === "" || cidade ==="") {
        document.getElementById('retorno-cadastro').removeAttribute('hidden');
        document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-danger');
        document.getElementById('retorno-cadastro').innerHTML = "Ops! Informe todos os dados para continuar!";
    } else {
        document.getElementById('exibir-dados').removeAttribute('hidden')
        document.getElementById('retorno-cadastro').removeAttribute('hidden');
        document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-success');
        document.getElementById('retorno-cadastro').innerHTML = "Dados informados corretamente!";
        exibirDados(nome,email,sexo,estado,cidade);
        limparDados();
    }
}
function limparDados(){
    document.getElementById('nome').value = "";
    document.getElementById('email').value = "";
    document.getElementById('sexo').value = "";
    document.getElementById('estado').value = "";
    document.getElementById('cidade').value = "";
}

function exibirDados(nome,email,sexo,estado,cidade){
    document.getElementById("nome-exibir").innerHTML = nome;
    document.getElementById("email-exibir").innerHTML = email;
    document.getElementById("sexo-exibir").innerHTML = sexo;
    document.getElementById("estado-exibir").innerHTML = estado;
    document.getElementById("cidade-exibir").innerHTML = cidade;
}

function selecionarCidade() {

    var estado = document.getElementById('estado').value;
    if (estado != "") {
        document.getElementById('bloco-cidades').removeAttribute('hidden');
    } else {
        document.getElementById('bloco-cidades').setAttribute('hidden', true);
    }
}