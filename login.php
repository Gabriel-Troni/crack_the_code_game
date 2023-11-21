<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crack The Code</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&family=Press+Start+2P&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="styles/login.css" />
  </head>

  <body>
    <form id="login-form" action="./src/process_login.php" method="POST" onsubmit="return validateForm()">
      <h1>Login</h1>
      <div class="inputs-list">

        <div class="input-container">
          <label>Usuário</label>
          <input name="user" type="text" placeholder="Usuário" />
          <p id="error-usuario"></p>
        </div>
        <div class="input-container">
          <label>Senha</label>
          <input name="senha" type="password" placeholder="Senha" />
          <p id="error-senha"></p>
        </div>
        
        <div class="input-container">
          <button class="btn" type="submit">Entrar</button>
        </div>
        <?php if (isset($_GET['erro'])): ?>
          <p id="mensagemErro">Usuário ou senha incorretos</p>
        <?php endif; ?>
        <a href="register.php">Registrar-se</a>
      </div>
    </form>
    <script src="./src/validation.js"></script>
  </body>
</html>
