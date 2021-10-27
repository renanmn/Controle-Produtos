<?php
require('bancodados/config.php');
include('reutilizaveis/header.php');
?>
<div class="cadastrados">
    <p class="subtitle">Adicionar produtos:</p>
    
    <div class="formulario">
        <div class="row">
            <form class="col s12" method="GET" action="add.php">
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