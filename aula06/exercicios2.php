<!DOCTYPE html>
<html>
<head>
    <title>Tabela Dinâmica</title>
</head>
<body>

<form method="post">
    Linhas: <input type="number" name="linhas" required>
    Colunas: <input type="number" name="colunas" required>
    <input type="submit" value="Gerar Tabela">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $linhas = $_POST["linhas"];
    $colunas = $_POST["colunas"];
    $i = 0;

    echo "<table border='1' cellpadding='10'>";
    while ($i < $linhas) {
        echo "<tr>";
        $j = 0;
        while ($j < $colunas) {
            echo "<td>Linha ".($i+1)." Coluna ".($j+1)."</td>";
            $j++;
        }
        echo "</tr>";
        $i++;
    }
    echo "</table>";
}
?>

</body>
</html>
