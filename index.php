<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Produtos</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center; /* Centraliza os links */
        }

        ul li {
            margin: 10px 0;
        }

        ul li a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            font-weight: bold;
            border: 1px solid #4CAF50;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block; /* Para que o link seja exibido como um botão */
        }

        ul li a:hover {
            background-color: #45a049;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Gerenciamento de Produtos</h1>

    <ul>
        <li><a href="views/form_produto.php">Cadastrar Produto</a></li>
        <li><a href="views/listar_produtos.php">Listar Produtos</a></li>
    </ul>
</body>

</html>
