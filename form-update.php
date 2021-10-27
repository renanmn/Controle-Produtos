<?php
require('bancodados/config.php');
include('reutilizaveis/header.php');
$id = filter_input(INPUT_GET, 'id');
?>
<div class="cadastrados">
    <p class="subtitle">Atualizar produto:</p>

    <div class="formulario">
        <div class="row">
            <form class="col s12" method="GET" action="update.php">
            <div class="input-field col s1">
                        <input id="nome" type="text" class="validate" name="id" value="<?=$id?>" readonly>
                        <label for="nome">ID Produto:</label>
                    </div>
                <div class="row">                    
                    <div class="input-field col s3">
                        <input id="nome" type="text" class="validate" name="nome">
                        <label for="nome">Produto:</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="valor" type="text" class="validate" name="valor">
                        <label for="valor">Valor</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="quantidade" type="text" class="validate" name="quantidade">
                        <label for="quantidade">Quantidade</label>
                    </div>
                    <input type="submit" class="waves-effect waves-light btn botaoadd" value="Enviar">
                </div>
            </form>

        </div>
    </div>
    <hr>


    <?php include('reutilizaveis/footer.php'); ?>