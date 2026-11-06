<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Fazer a matrícula</title>
</head>
<body class="fundo">
    <div class="retangulo">
        <h2>Matrícula</h2>    
    </div>   

    <form id="login" action="login.php" method="post">
        <input type="text" placeholder="Nome:" name="nome" required />
        <input type="text" placeholder="Idade:" name="idade" required />
        <input type="text" placeholder="CPF:" name="cpf" required />
        <input type="tel" placeholder="Telefone:" name="tel" required />

        <button type="submit" id="bnt">Matricular</button>
    </form>

    </div>
</body>
</html>