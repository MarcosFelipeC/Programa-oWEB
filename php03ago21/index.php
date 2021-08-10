<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/pessoa.js"></script>
    <title>Cadastro de pessoas</title>
</head>

<body>
    <div class="container">
        <div class="row margin-top-50">
            <div class="offset-md-3 col-md-6">
                <div class="row">
                    <div class="col-md-12" id="retorno"></div>
                    <form onsubmit="return false" method="POST" action="acoes/pessoas/salvar-pessoa.php" id="form-pessoa">
                        <div class="col-md-12">
                            <label class="form-label">Nome: </label>
                            <input type="text" id="nome" name="nome" class="form-control"></input>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Email: </label>
                            <input type="email" id="email" name="email" class="form-control"></input>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Sexo: </label>
                            <select class="form-select" id="sexo" name="sexo">
                                <option value="">Selecione...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Senha: </label>
                            <input type="password" id="senha" name="senha" class="form-control"></input>
                        </div>
                        <div class="col-md-12 margin-top-20">
                            <button onclick="validarPessoa()" class="btn btn-success col-md-12">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>