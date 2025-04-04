<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Neymar Style</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to right, #1b4332, #52b788);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .login-box {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
      max-width: 400px;
      width: 100%;
      transition: all 0.3s ease;
    }

    .login-box h2 {
      text-align: center;
      color: #fcd116;
      margin-bottom: 30px;
    }

    .form-control {
      background-color: #fff;
      color: #000;
      border: none;
      margin-bottom: 20px;
      padding: 10px 15px;
      border-radius: 8px;
      transition: box-shadow 0.2s;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem #fcd11680;
      outline: none;
    }

    .btn-neymar {
      background-color: #fcd116;
      color: #000;
      font-weight: bold;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-neymar:hover {
      background-color: #ffd60a;
    }

    .img-box {
      display: none;
    }

    @media (min-width: 768px) {
      .img-box {
        display: block;
        max-width: 400px;
        margin-right: 40px;
      }

      .img-box img {
        width: 100%;
        border-radius: 15px;
      }

      .login-section {
        display: flex;
        align-items: center;
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <div class="login-section container">
    <div class="img-box">
      <img src="https://tse4.mm.bing.net/th?id=OIP.zpTWeqcJl8EbAhlIasMAjAHaEK&pid=Api" alt="Neymar" />
    </div>

    <div class="login-box">
      <h2>Login</h2>
      <form action="processa.php" method="POST">
        <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required />
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required />
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="lembrar" />
          <label class="form-check-label" for="lembrar">Lembrar de mim</label>
        </div>
        <input type="submit" value="Entrar" class="btn btn-neymar w-100" />
      </form>
    </div>
  </div>
</body>
</html>
