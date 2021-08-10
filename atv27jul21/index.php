<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário</title>
    <meta charset='utf-8'>

</head>

<body>
    <div class="conteudo">
        <div class="caixa">
            <h3 class="titulo">Cadastre-se</h3>
            <form id="form-cadastro" action="#" method="post">
                <div class="form-group">
                    <label>Nome:</label><br>
                    <input type="text" id="nome" name="nome" placeholder="Informe o seu nome"><br>
                </div>
                <div class="form-group">
                    <label>Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Digite seu email"><br>
                </div>
                <div class="form-group">
                    <label>Data de Nascimento:</label><br>
                    <input type="date" id="nascimento" name="nascimento"><br>
                </div>
                <div class="form-group">
                    <label>Sexo:</label><br>
                    <select id="sexo" name="sexo">
                        <optgroup label="Sexo">
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            </oprgroup>
                    </select><br>
                </div>
                <div class="form-group">
                    <label>Telefone:</label><br>
                    <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone"><br>
                </div>
                <div class="form-group">
                    <label>Senha:</label><br>
                    <input type="password" id="senha" name="senha" placeholder="Informe sua senha"><br>
                </div>
                <div class="form-group">
                    <label>LinkedIn:</label><br>
                    <input type="url" id="linkedin" name="linkedin" placeholder="Digite o link"><br>
                </div>
                <div class="form-group">
                    <label>Imagem:</label><br>
                    <input type="file" id="foto" name="foto"><br>
                </div>
                <div class="form-group">
                    <label>Fale um pouco sobre você:</label><br>
                    <textarea rows="10" id="descricao" name="descricao"></textarea><br>
                </div>
                <input type="submit" value="Salvar" class="btn btn-success">
            </form>
        </div>
</body>

</html>