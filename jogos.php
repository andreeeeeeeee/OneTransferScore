<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneTransferScore</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="menu">
        <div class="item"><a href="index.php">Início</a></div>
        <div class="item"><a href="jogos.php">Jogos</a></div>
        <div class="item"><a href="campeonatos.php">Campeonatos</a></div>
        <div class="item" onclick="login()">Login</div>
        <div class="textoLogin" id="login">
            <input type="text" placeholder="Login">
            <input type="text" placeholder="Senha">
            <button>Entrar</button>
    </div>
    <input type="text" placeholder="Pesquisar">
    <button>🔎</button>

    <h1>(Não colocamos os jogos no banco, muito trabalho)</h1>

    <script>
        function login() {
            document.getElementById("login").classList.toggle("show");
        }
    </script>
    </div>
</body>
</html>