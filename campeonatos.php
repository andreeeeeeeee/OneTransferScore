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
        <li><a href="campeonatos.php"><b>Campeonatos</b></a></li>
        <li>Login</li>
        <li><input class="pesquisa" type="text" placeholder="🔎  Pesquisar"><button class="pesquisa">🔎</button></li>
      </ul>
    </nav>
    <div class="content">
      <div class="coluna" id="1">
        <img class="camp" src="./img/brasileirao.png">
        <table>
          <tr>
            <th>Posição</th>
            <th>Clube</th>
            <th>Pontos</th>
          </tr>
          <?php
          $db = new SQLite3("db.db");
          $db->exec("PRAGMA foreign_keys = ON");
          $pos = $db->query("SELECT id FROM clubes WHERE clubes.id<=6");
          $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id<=6");
          $pts = $db->query("SELECT pontos FROM clubes WHERE clubes.id<=6");
          while ($row = $pos->fetchArray(SQLITE3_ASSOC)) {
            foreach ($row as $key => $value) {
              echo '<tr><td>' . $value . '</td>';
            }
          }
          $db->close();
          ?>
        </table>
      </div>
      <div class="coluna" id="2">
        <img class="camp" src="./img/laliga.png">
        <table>
          <tr>
            <th>Posição</th>
            <th>Clube</th>
            <th>Pontos</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>