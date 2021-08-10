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
                            <label class="form-label" id="labelNome">Nome:</label>
                            <input type="text" class="form-control normalBox" id="nome">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" id="labelCpf">CPF:</label>
                            <input type="text" class="form-control normalBox" id="cpf">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">NASCIMENTO:</label>
                            <input type="date" class="form-control normalBox">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" id="labelSexo">SEXO:</label>
                            <select class="form-select normalSelect" id="sexo" name="sexo">
                                <option value="">Selecione...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" id="labelCivil">ESTADO CIVIL:</label>
                            <select class="form-select normalSelect" id="estadoCivil" name="estadoCivil">
                                <option value="">Selecione...</option>
                                <option value="1">Casado</option>
                                <option value="2">Solteiro</option>
                                <option value="3">Amancebado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">ESCOLARIDADE:</label>
                            <select class="form-select normalSelect" id="escolaridade" name="escolaridade">
                                <option value="1">Fundamental</option>
                                <option value="2">Ensino Médio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h4>ENDEREÇO</h4>
                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">LOGRADOURO:</label>
                            <input type="text" class="form-control normalBox">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">NÚMERO:</label>
                            <input type="text" class="form-control normalBox">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">COMPLEMENTO:</label>
                            <input type="text" class="form-control normalBox">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">ESTADO:</label>
                            <input type="text" class="form-control normalBox">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="form-group">
                            <label class="form-label">CIDADE:</label>
                            <input type="text" class="form-control normalBox">
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