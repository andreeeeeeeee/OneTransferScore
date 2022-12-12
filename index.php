<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OneTransferScore</title>
  <link rel="stylesheet" href="./style/style.css">
  <style>
    .coluna h2,
    .coluna span {
      width: 80%;
      text-align: justify;
    }
  </style>
</head>

<body>
  <div class="container">
    <nav class="menu">
      <ul>
        <li><a href="index.php"><b>Início</b></a></li>
        <li><a href="jogos.php">Jogos</a></li>
        <li><a href="campeonatos.php">Campeonatos</a></li>
        <li>Login</li>
        <li><input class="pesquisa" type="text" placeholder="🔎  Pesquisar"><button class="pesquisa">🔎</button></li>
      </ul>
    </nav>
    <div class="content">
      <div class="coluna" id="1">
        <div class="img"><img src="./img/titirica.png"></div>
        <h2>Tiririca afirma: "Internacional foi roubado."</h2>
        <span>Comentarista esportivo, ativista, economista, diplomata, político e cantor contesta título palmeirense e defende teoria de que Sport Club Internacional é verdadeiro campeão.</span>
      </div>
      <div class="coluna" id="2">
        <div class="img"><img src="./img/titirica.png"></div>
        <h2>Não temos mais notícias</h2>
        <span>Após pronunciamento de Tiririca, o mundo do futebol se calou para refletir sobre posicionamento do pensador.</span>
      </div>
      <!--<?php
          $db = new SQLite3("db.db");
          $db->exec("PRAGMA foreign_keys = ON");
          $result = $db->query("SELECT img FROM escudos INNER JOIN clubes ON clubes.id = escudos.id_clube");
          while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            foreach ($row as $key => $value) {
              echo '<img src="' . $value . '">';
            }
          }
          $db->close();
          ?>-->
    </div>
    <!-- notícias aqui em baixo -->




  </div>
</body>

</html>