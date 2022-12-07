<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="terceiraPagina.css">
</head>
<body>
    <form method="POST" action="perfilProcessa.php" class="formPerfil">
            <h1>Cadastrar Perfil</h1>

            <div class="item">
            <label><strong>Nome: </strong></label>
            <input type="text" name="nome" id="nome"><br><br>
            </div>

            <div class="item">
            <label><strong>E-mail: </strong></label>
            <input type="email" name="email" id="email"><br><br>
            </div>

            <div class="item">
            <label><strong>Senha: </strong></label>
            <input type="password" name="senha" id="senha"><br><br>
            </div>
             
        <button type="submit">SALVAR</button>

    </form>
</body>
</html>