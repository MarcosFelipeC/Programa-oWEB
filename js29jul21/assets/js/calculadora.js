function calcular(){
    var num1 = document.getElementById('num1').value
    var num2 = document.getElementById("num2").value;
    var operacao = document.getElementById("operacao").value;
    if(num1 != "" && num2 != ""){
        document.getElementById('retorno').setAttribute('hidden',true);
        if(Number.isNaN(parseFloat(num1)) || Number.isNaN(parseFloat(num2))){
            document.getElementById('retorno').removeAttribute('hidden');
            document.getElementById('retorno').getAttribute('class','alert alert-danger');
            document.getElementById('retorno').innerHTML = "Preencha todos os dados para continuar!";
        }
        else{
            realizarCalculo(parseFloat(num1),parseFloat(num2),operacao)
        }
    }else{
        document.getElementById('retorno').removeAttribute('hidden');
        document.getElementById('retorno').setAttribute('class','alert alert-danger');
        document.getElementById('retorno').innerHTML = "Preencha todos os dados para continuar!";
    }

}

function realizarCalculo(num1,num2,operacao){
    var resultado;
    if(operacao == "+"){
        resultado = num1+num2
    }
    else if(operacao == "-"){
        resultado = num1-num2
    }
    else if(operacao == "*"){
        resultado = num1*num2
    }
    else if(operacao == "/"){
        resultado = num1/num2
    }
    document.getElementById('resultado').innerHTML = resultado;

}