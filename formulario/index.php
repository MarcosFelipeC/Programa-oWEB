<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro de pessoas</title>
</head>

<body>
    <div class="container">
        <div class="box-centralizado">
            <form action="#" method="post" id="form-cadastro">
                <h3 class="titulo">Cadastro de pessoas</h3>
                <div class="form-group">
                    <label>Nome:</label><br>
                    <input type="text" id="nome" name="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label><br>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="from-group">
                    <label>Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                </div>
                <button class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
</body>

</html>