<?php
// controllers/ProdutoController.php

require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_produto = $_POST['nome_produto'];
    $preco_compra = $_POST['preco_compra'];
    $preco_venda = $_POST['preco_venda'];
    $codigo_produto = $_POST['codigo_produto'];
    $nome_fornecedor = $_POST['nome_fornecedor'];

    // Inserir produto
    $sql = "INSERT INTO produtos (nome_produto, preco_compra, preco_venda, codigo_produto, nome_fornecedor) 
            VALUES ('$nome_produto', '$preco_compra', '$preco_venda', '$codigo_produto', '$nome_fornecedor')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a página de listagem após o cadastro
        header("Location: ../views/listar_produtos.php");
    } else {
        echo "Erro ao cadastrar produto: " . $conn->error;
    }

    $conn->close();
}
?>
