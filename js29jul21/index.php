<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/validacoes.js"></script>
    <style>
        .margin-top-50 {
            margin-top: 50px;
        }

        .margin-top-10 {
            margin-top: 10px;
        }
    </style>
    <title>JS</title>
</head>

<body>
    <div class="container">
        <div class="row margin-top-50">
            <div class="offset-md-3 col-md-6">
                <div class="row">
                    <div class="col-md-12" id="retorno-cadastro"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Sexo:</label>
                            <select id="sexo" class="form-select">
                                <option value="">Selecione...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Masculino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">UF</label>
                            <select id="estado" class="form-select" onchange="selecionarCidade()">
                                <option value="">Selecione...</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="EX">Estrangeiro</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12" id="bloco-cidades" hidden>
                        <div class="form-group">
                            <label class="form-label">Cidade</label>
                            <select id="cidade" class="form-select">
                                <option value="1">Mombaça</option>
                                <option value="2">Fortaleza</option>
                                <option value="3">Crato</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 margin-top-10">
                        <div class="form-group">
                            <button class="btn btn-success col-md-12" onclick="validar()">Salvar</button>
                        </div>
                    </div>
                </div>
                <div class="row marging-top-50" id="exibir-dados" hidden>
                    <div class ="col-md-12">
                        <div class="alert alert-success">
                            <p>Nome: <span id="nome-exibir"></span></p>
                            <p>Email: <span id="email-exibir"></span></p>
                            <p>Sexo: <span id="sexo-exibir"></span></p>
                            <p>Estado: <span id="estado-exibir"></span></p>
                            <p>Cidade: <span id="cidade-exibir"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>