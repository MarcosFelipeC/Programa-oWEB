<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/calculadora.js"></script>
    <title>Calculardora</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="row">
                    <div class="col-md-12" id="retorno">

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Numero 01</label>
                            <input type="text" class="form-control" id="num1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Numero 02</label>
                            <input type="text" class="form-control" id="num2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Operação</label>
                            <select id="operacao" class="form-select">
                                <option value="+">(+) Somar</option>
                                <option value="-">(-) Subtrair</option>
                                <option value="*">(*) Multiplicar</option>
                                <option value="/">(/) Dividir</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h1 id="resultado"></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-3 col-md-6 margin-top-50">
                        <button class="btn btn-success col-md-12" onclick="calcular()">Calcular</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>