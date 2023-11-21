<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crack The Code</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/register.css">
</head>

<body>
    <form id="login-form" action="./src/process_register.php" method="POST">
      <h1>Cadastro</h1>
      <div class="inputs-list">

        <div class="input-container">
          <label>Usuário</label>
          <input name="user" type="text" placeholder="Usuário" />
        </div>
        <div class="input-container">
          <label>Email</label>
          <input name="email" type="email" placeholder="Email" />
        </div>
        <div class="input-container">
          <label>Senha</label>
          <input name="senha" type="password" placeholder="Senha" />
        </div>
        <div class="input-container">
          <label>Confirmar Senha</label>
          <input name="confirm_senha" type="password" placeholder="Confirmar Senha" />
        </div>
        
        <div class="input-container">
          <button class="btn" type="submit">Cadastrar</button>
        </div>
        <a href="login.php">Login</a>
      </div>
    </form>
</body>

</html>