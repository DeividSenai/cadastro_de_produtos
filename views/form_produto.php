<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            text-align: left;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px; /* Espaçamento abaixo do botão de cadastro */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Para exibir o botão na mesma linha do formulário */
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="../controllers/ProdutoController.php" method="POST">
        <h2>Cadastro de Produtos</h2>

        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" id="nome_produto" name="nome_produto" required>

        <label for="preco_compra">Preço de Compra:</label>
        <input type="number" id="preco_compra" name="preco_compra" step="0.01" required>

        <label for="preco_venda">Preço de Venda:</label>
        <input type="number" id="preco_venda" name="preco_venda" step="0.01" required>

        <label for="codigo_produto">Código do Produto:</label>
        <input type="text" id="codigo_produto" name="codigo_produto" required>

        <label for="nome_fornecedor">Nome do Fornecedor:</label>
        <input type="text" id="nome_fornecedor" name="nome_fornecedor" required>

        <input type="submit" value="Cadastrar Produto">
    </form>

    <a href="javascript:history.back()" class="btn">Voltar</a> <!-- Botão de Voltar colocado abaixo do formulário -->

</body>
</html>
