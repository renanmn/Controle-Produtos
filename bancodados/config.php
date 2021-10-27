<?php

try {
    $pdo = new PDO("mysql:dbname=empresa;host=localhost", "root", "");
    //echo "<script>alert('Conectado com o banco de dados!');</script>";
} catch (\Throwable $th) {
   //echo "<script>alert('Falha ao conectar com o banco de dados!');</script>";
}

