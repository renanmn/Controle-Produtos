<?php

use Symfony\Component\Console\Input\Input;

require ('bancodados/config.php');

$nome =filter_input(INPUT_GET, 'nome');
$valor = filter_input(INPUT_GET, 'valor');
$quantidade = filter_input(INPUT_GET, 'quantidade');


if ($nome && $valor && $quantidade) {
    $add = $pdo->prepare("INSERT INTO produtos (nome, quantidade, valor) VALUES (:nome, :qtd, :valor)");
    $add->bindValue(':nome', $nome);
    $add->bindValue(':qtd', $quantidade);
    $add->bindValue(':valor', $valor);
    $add->execute();

    header('Location: index.php');
}else {
    header('Location: index.php');
}

//header('Location: index.php');
exit;