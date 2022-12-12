<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OneTransferScore</title>
  <link rel="stylesheet" href="./style/style.css">
  <style>
    .coluna {
      border-style: none;
      border-width: 0;
      align-items: center;
      justify-items: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <nav class="menu">
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="jogos.php"><b>Jogos</b></a></li>
        <li><a href="campeonatos.php">Campeonatos</a></li>
        <li>Login</li>
        <li><input class="pesquisa" type="text" placeholder="🔎  Pesquisar"><button class="pesquisa">🔎</button></li>
      </ul>
    </nav>
    <div class="content">
      <div class="coluna" id="1">
        <div class="jogo" id="1">
          <div class="equipe" id="1">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=4");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=4");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
          <div>
            <span>X</span>
          </div>
          <div class="equipe" id="2">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=19");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=19");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
        </div>
        <div class="jogo" id="2">
          <div class="equipe" id="1">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=26");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=26");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
          <div>
            <span>X</span>
          </div>
          <div class="equipe" id="2">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=35");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=35");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
        </div>
      </div>
      <div class="coluna" id="2">
        <div class="jogo" id="1">
          <div class="equipe" id="1">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=14");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=14");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
          <div>
            <span>X</span>
          </div>
          <div class="equipe" id="2">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=6");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=6");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
        </div>
        <div class="jogo" id="2">
          <div class="equipe" id="1">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=36");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=36");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
          <div>
            <span>X</span>
          </div>
          <div class="equipe" id="2">
            <?php
            $db = new SQLite3("db.db");
            $db->exec("PRAGMA foreign_keys = ON");
            $img = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube AND clubes.id=13");
            while ($row = $img->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<img src="' . $value . '">';
              }
            }
            $nome = $db->query("SELECT nome FROM clubes WHERE clubes.id=13");
            while ($row = $nome->fetchArray(SQLITE3_ASSOC)) {
              foreach ($row as $key => $value) {
                echo '<span>' . $value . '</span>';
              }
            }
            $db->close();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>