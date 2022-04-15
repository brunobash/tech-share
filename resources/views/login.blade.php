<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">

  <title>Login | Technical Share</title>
</head>

<body>
  <header>
    <div class="back">
      <a href="/">
        <img src="{{ asset('img/seta-para-tras.png') }}" alt="botão voltar">
      </a>
    </div>
    <img src="{{ asset('img/logo-bg.png') }}" alt="Logo" class="logo">
    <div class="line-header"></div>
  </header>

  <main>
    <form action="#">
      <h3>Login</h3>
      <input type="email" placeholder="E-mail" name="E-mail" id="email">
      <input type="password" placeholder="Senha" name="Senha" id="password">
      <p><a href="#">Recuperar a senha?</a></p>
    </form>

    <div class="btn">
      <a href="/home">Entrar</a>
      <div class="line-button"></div>
      <a href="#">Login com Google <img src="{{ asset('img/google-icon.png') }}" alt="google"></a>
    </div>
  </main>
</body>

</html>