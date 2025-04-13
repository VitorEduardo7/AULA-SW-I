<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .Eletrônico {
            background-color:rgb(224, 175, 102);
        }

        .Talher {
            background-color:rgb(247, 162, 162);
        }

        .Roupas {
            background-color:rgb(191, 223, 224);
        }
        .Alimentos {
            background-color:rgb(179, 226, 169);
        }
    </style>
</head>
<body>

<?php
$produtos = [
    ["nome" => "Notebook", "preco" => 3500, "categoria" => "Eletrônico"],
    ["nome" => "Camisa", "preco" => 70, "categoria" => "Roupas"],
    ["nome" => "Arroz", "preco" => 20, "categoria" => "Alimentos"],
    ["nome" => "Garfo", "preco" => 150, "categoria" => "Talher"],
];

echo "<table>";
echo "<tr><th>Nome</th><th>Preço</th><th>Categoria</th></tr>";

foreach ($produtos as $produto) {
    $categoria = $produto["categoria"];
    echo "<tr class='$categoria'>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>R$ {$produto['preco']}</td>";
    echo "<td>{$produto['categoria']}</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
