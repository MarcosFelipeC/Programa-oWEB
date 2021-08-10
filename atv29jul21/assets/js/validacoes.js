function validar(){
    var nome = document.getElementById('nome').value
    var cpf = document.getElementById('cpf').value
    var sexo = document.getElementById('sexo').value
    var estadoCivil = document.getElementById('estadoCivil').value
    
    if(nome == "" || cpf =="" || sexo=="" || estadoCivil==""){
        document.getElementById('retorno-cadastro').removeAttribute('hidden')
        document.getElementById('retorno-cadastro').setAttribute('class','alert alert-danger')
        document.getElementById('retorno-cadastro').innerHTML="Informe todos os dados para continuar!"
        
        document.getElementById('labelNome').setAttribute('class','form-label alerta');
        document.getElementById('labelCpf').setAttribute('class','form-label alerta');
        document.getElementById('labelSexo').setAttribute('class','form-label alerta');
        document.getElementById('labelCivil').setAttribute('class','form-label alerta');

        document.getElementById('nome').setAttribute('class','form-control alertaBox');
        document.getElementById('cpf').setAttribute('class','form-control alertaBox');
        document.getElementById('sexo').setAttribute('class','form-select alertaBox');
        document.getElementById('estadoCivil').setAttribute('class','form-select alertaBox');
    }
    else{
        document.getElementById('retorno-cadastro').removeAttribute('hidden')
        document.getElementById('retorno-cadastro').setAttribute('class','alert alert-success')
        document.getElementById('retorno-cadastro').innerHTML="Dados informados corretamente!"

        document.getElementById('labelNome').setAttribute('class','form-label');
        document.getElementById('labelCpf').setAttribute('class','form-label');
        document.getElementById('labelSexo').setAttribute('class','form-label');
        document.getElementById('labelCivil').setAttribute('class','form-label');

        document.getElementById('nome').setAttribute('class','form-control normalBox');
        document.getElementById('cpf').setAttribute('class','form-control normalBox');
        document.getElementById('sexo').setAttribute('class','form-select normalSelect');
        document.getElementById('estadoCivil').setAttribute('class','form-select normalSelect');
    }
}