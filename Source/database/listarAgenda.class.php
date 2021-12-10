<?php
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

$viewList = 
"
    SELECT*FROM tb_agenda_veiculos;
";

try {
    $query = Connect::getInstance()->query($viewList);
    var_dump([
        $query,
        $query -> rowCount(),
        $query -> fetchAll(),
    ]);
} catch (PDOException $exception) {
    die($exception);
}