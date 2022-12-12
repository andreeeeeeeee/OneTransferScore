<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneTransferScore</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
  <div class="container">
    <nav class="menu">
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="jogos.php">Jogos</a></li>
        <li><a href="campeonatos.php">Campeonatos</a></li>
        <li>Login</li>
        <li><input class="pesquisa" type="text" placeholder="🔎  Pesquisar"><button class="pesquisa">🔎</button></li>
      </ul>
    </nav>
  </div>

    <?php
        $db = new SQLite3("db.db");
        $db->exec("PRAGMA foreign_keys = ON");
        $result = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube");
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            foreach ($row as $key => $value) {
                echo '<img width=100px height=100px src="' . $value . '">';
            }
        }
        $db->close();
    ?>
</body>
</html>