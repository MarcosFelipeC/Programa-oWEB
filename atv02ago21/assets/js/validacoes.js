function validar() {
    var nome = document.getElementById('nome').value
    var responsavel = document.getElementById('responsavel').value
    var email = document.getElementById('email').value
    var idade = document.getElementById('idade').value
    var sexo = document.getElementById('sexo').value


    if (nome == "" || email == "" || idade == "" || sexo == "") {
        document.getElementById('retorno-cadastro').removeAttribute('hidden')
        document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-danger')
        document.getElementById('retorno-cadastro').innerHTML = "Informe todos os dados para continuar!"

    }
    else {

        if (!Number.isNaN(parseFloat(idade))) {
            if (parseFloat(idade) < 18) {
                if (responsavel == "") {
                    document.getElementById('retorno-cadastro').removeAttribute('hidden')
                    document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-warning')
                    document.getElementById('retorno-cadastro').innerHTML = "Menor de Idade! Preencha o campo Responsável!"
                    document.getElementById('resp').removeAttribute('hidden')
                }
                else {
                    document.getElementById('retorno-cadastro').removeAttribute('hidden')
                    document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-success')
                    document.getElementById('retorno-cadastro').innerHTML = "Dados informados corretamente!"
                }

            }
            else if(parseFloat(idade)>=50){
                document.getElementById('retorno-cadastro').removeAttribute('hidden')
                document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-info')
                document.getElementById('retorno-cadastro').innerHTML = "Idade superior ao permitido"
            }

            else {
                document.getElementById('retorno-cadastro').removeAttribute('hidden')
                document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-success')
                document.getElementById('retorno-cadastro').innerHTML = "Dados informados corretamente!"
            }
        }
        else {
            document.getElementById('retorno-cadastro').removeAttribute('hidden')
            document.getElementById('retorno-cadastro').setAttribute('class', 'alert alert-danger')
            document.getElementById('retorno-cadastro').innerHTML = "Informe todos os dados para continuar!"
        }
    }
}