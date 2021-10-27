<?php

use Symfony\Component\Console\Input\Input;

require ('bancodados/config.php');
$id = filter_input(INPUT_GET, 'id');
$nome =filter_input(INPUT_GET, 'nome');
$valor = filter_input(INPUT_GET, 'valor');
$quantidade = filter_input(INPUT_GET, 'quantidade');


if ($nome && $valor && $quantidade) {
    $update = $pdo->prepare("UPDATE produtos SET nome=:nome, quantidade=:qtd, valor=:valor WHERE id=:id");
    $update->bindValue(':id', $id);
    $update->bindValue(':nome', $nome);
    $update->bindValue(':qtd', $quantidade);
    $update->bindValue(':valor', $valor);
    $update->execute(); 

    header('Location: index.php');
}else {
    header('Location: index.php');
}


exit;