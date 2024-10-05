<?php
// views/listar_produtos.php

require_once '../config/db.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
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

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            margin-top: 20px; /* Espaçamento superior */
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
if ($result->num_rows > 0) {
    echo "<h2>Produtos Cadastrados</h2>";
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Preço de Compra</th>
                <th>Preço de Venda</th>
                <th>Código do Produto</th>
                <th>Nome do Fornecedor</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome_produto"] . "</td>
                <td>" . number_format($row["preco_compra"], 2, ',', '.') . "</td>
                <td>" . number_format($row["preco_venda"], 2, ',', '.') . "</td>
                <td>" . $row["codigo_produto"] . "</td>
                <td>" . $row["nome_fornecedor"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<h2>Nenhum produto encontrado.</h2>";
}

$conn->close();
?>

<a href="javascript:history.back()" class="btn">Voltar</a> <!-- Botão de Voltar -->

</body>
</html>
