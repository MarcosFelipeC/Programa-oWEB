<!DOCTYPE html>
<html>

<head>
    <title>Formulário</title>
    <meta charset='utf-8'>
</head>

<body>
    <h3>Cadastre-se</h3>
    <form id="form-cadastro" action="#" method="post">
        <label>Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Informe o seu nome"><br>
        <label>Email</label><br>
        <input type="email" id="email" name="email" placeholder="Digite seu email"><br>
        <label>Data de Nascimento</label><br>
        <input type="date" id="nascimento" name="nascimento"><br>
        <label>Sexo</label><br>
        <select id="sexo" name="sexo">
            <optgroup label="Sexo">
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
                </oprgroup>
        </select><br>
        <label>Telefone</label><br>
        <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone"><br>
        <label>Senha:</label><br>
        <input type="password" id="senha" name="senha" placeholder="Informe sua senha"><br>
        <label>LinkedIn</label><br>
        <input type="url" id="linkedin" name="linkedin" placeholder="Digite o link"><br>
        <label>Imagem</label><br>
        <input type="file" id="foto" name="foto"><br>
        <label>Fale um pouco sobre você</label><br>
        <textarea rows="10" id="descricao" name="descricao"></textarea><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>