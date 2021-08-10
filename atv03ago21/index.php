<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/produto.js"></script>

    <title>Cadastro de Produtos</title>
</head>

<body>
    <div class="container">
        <div class="row margin-top-50">
            <div class="offset-md-3 col-md-6">
                <div class="row">
                    <div class="col-md-12" id="mensagem"></div>
                    <form onsubmit="return false" method="POST" action="acoes/produtos/salvar-produto.php" id="formulario">
                        <div class="col-md-12">
                            <label class="form-label">Nome do Produto:</label>
                            <input type="text" class="form-control" id="nome" name="nome"></input>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Valor(R$):</label>
                            <input type="text" class="form-control" id="preco" name="preco"></input>
                        </div>
                        <div class="col-md-12 margin-top-20">
                            <button onclick="salvarProduto()" class="btn btn-success col-md-12">Salvar</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>