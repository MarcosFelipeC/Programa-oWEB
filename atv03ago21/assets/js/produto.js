function salvarProduto() {
    var nome = document.getElementById("nome").value;
    var preco = document.getElementById("preco").value;
    if (nome == "" || preco == "") {
        document.getElementById("mensagem").setAttribute("class", "alert alert-danger");
        document.getElementById("mensagem").innerHTML = "Digite todos os dados";
    }
    else {
        if (Number.isNaN(parseFloat(preco))) {
            document.getElementById("mensagem").setAttribute("class", "alert alert-danger");
            document.getElementById("mensagem").innerHTML = "Digite um valor correto para preço";
        }
        else{
            document.getElementById('formulario').removeAttribute('onsubmit');
        }
    }
}