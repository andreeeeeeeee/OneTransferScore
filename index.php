<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneTransferScore</title>
</head>
<body>
    <?php
        $db = new SQLite3("banco.db");
        $db->exec("PRAGMA foreign_keys = ON");
        // codigo vai aqui
        $db->close();
    ?>
</body>
</html>