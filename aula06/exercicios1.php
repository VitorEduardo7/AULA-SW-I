<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        td, th {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        .par {
            background-color: #f2f2f2;
        }
        .impar {
            background-color: #d9edf7;
        }
    </style>
</head>
<body>

<table>
    <?php
    for ($i = 1; $i <= 8; $i++) {
        $classe = ($i % 2 == 0) ? 'par' : 'impar';
        echo "<tr class='$classe'>";
        for ($j = 1; $j <= 4; $j++) {
            echo "<td>Linha $i, Coluna $j</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
