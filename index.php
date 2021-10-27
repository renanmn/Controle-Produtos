<?php
require('bancodados/config.php');

$produtos = [];
$dados = $pdo->query('SELECT * FROM produtos');
if ($dados->rowCount() > 0) {
    $produtos = $dados->fetchAll(PDO::FETCH_ASSOC);
}

include ('reutilizaveis/header.php');

?>


    <a href="form-add.php" class="waves-effect waves-light btn botao">Adicionar</a>
    <div class="cadastrados">
        <p class="subtitle">Produtos Cadastrados:</p>
        <hr>

        <table class="table bordered striped centered">
            <thead>
                <tr class="titleproducts">
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <td>Valor</td>
                    <td>Opções</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                    <tr class="products">
                        <td><?php echo $produto['nome']; ?></td>
                        <td><?php echo $produto['quantidade']; ?></td>
                        <td>R$<?php echo $produto['valor']; ?></td>
                        <td><a href="delete.php?id=<?= $produto['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar este produto?');"> Excluir</a> |
                        <a href="form-update.php?id=<?= $produto['id']; ?>"> Modificar</a></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>



  <?php include ('reutilizaveis/footer.php');?>