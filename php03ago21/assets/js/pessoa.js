function validarPessoa(){
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var sexo = document.getElementById("sexo").value;
    var senha = document.getElementById("senha").value;
    if(nome==""||email==""||sexo==""||senha==""){
        document.getElementById('retorno').setAttribute("class", "alert alert-danger");
        document.getElementById('retorno').innerHTML = "Ops, Preencha tudo para continuar!"
    }
    else{
        document.getElementById('form-pessoa').removeAttribute('onsubmit');
    }
}