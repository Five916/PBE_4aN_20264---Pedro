<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Forms</h1>
    <form method="post" action="recebe.php">
    <label for="login">Login</label>
    <input type="text" id="login" name="login"><br>
    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha"><br>
    <label for="data">Data</label>
    <input type="date" id="data" name="data"><br>
    <!-- ESPAÇO DE LINHA -->
    <h3>3 campos para linguagem back-end</h3>
    <input type="checkbox" name="html" value="HTML"> HTML <br>
    <input type="checkbox" name="sql" value=""SQL> SQL <br>
    <input type="checkbox" name="php" value="PHP"> PHP <br>
    <!-- ESPAÇO DE LINHA -->
    <h3>ta entendendo cabaço?</h3>
    <input type="radio" name=resposta value="sim"> Sim <br>
    <input type="radio" name=resposta value="não"> Não <br>
    <input type="radio" name=resposta value="boiando"> Estou boiando💀 <br>
    <!-- ESPAÇO DE LINHA -->
    <h3> 4 ESTADOS DA REGIÂO SUDESTE </h3>
    <select name="uf">
        <option disable select>Escolhe ai po</option>
        <option>ES</option>
        <option>MG</option>
        <option>RF</option>
        <option>SP</option>
    </select>
    </form>
</body>
</html>