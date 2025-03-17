<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Pessoais</title>
</head>
<body>
    <h1>Cadastro de Informações</h1>
    <form action="form01.php" method="POST">
        <p>Nome: <input type="text" name="nome" required></p>
        <p>E-mail: <input type="email" name="email" required></p>
        <p>Data de Nascimento: <input type="date" name="data_nascimento" required></p>
        <p>Bandeira do Cartão:
            <select name="bandeira" required>
                <option value="Visa">Visa</option>
                <option value="Mastercard">Mastercard</option>
                <option value="American Express">American Express</option>
                <option value="Elo">Elo</option>
            </select>
        </p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
