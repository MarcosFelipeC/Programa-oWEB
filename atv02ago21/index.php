<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/validacoes.js"></script>
    <title>Formulário</title>
</head>

<body>
    <div class="container margin-top-100">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                
                <div class="col-md-12" id="retorno-cadastro" hidden></div>

                <h4>DADOS PESSOAIS</h4>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" id="labelNome">NOME:</label>
                            <input type="text" class="form-control normalBox" id="nome">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">EMAIL:</label>
                            <input id="email" type="text" class="form-control normalBox">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">IDADE:</label>
                            <input id="idade" type="text" class="form-control normalBox">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group" id="resp" hidden>
                            <label class="form-label">RESPONSÁVEL:</label>
                            <input id="responsavel" type="text" class="form-control normalBox">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">SEXO:</label>
                            <select class="form-select normalSelect" id="sexo" name="sexo">
                                <option value="">Selecione...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-4">
                        <div class="form-group">
                            <button onclick="validar()" class="btn btn-success col-md-4">Salvar</button>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>

</body>