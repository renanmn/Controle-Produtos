<?php

use Symfony\Component\Console\Input\Input;

require ('bancodados/config.php');

$id =filter_input(INPUT_GET, 'id');

if ($id) {
    $delete = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $delete->bindValue(':id', $id);
    $delete->execute();
}

header('Location: index.php');
exit;