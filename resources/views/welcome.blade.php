<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/page-landing/page-landing.css') }}" rel="stylesheet">

  <title>Technical Share</title>
</head>

<body>
  <div id="container">
    <div class="navbar">

      <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
      <div class="logo-text">
        <h4>TECHNICAL SHARE</h4>
        <p>o seu futuro agora!</p>
      </div>

      <nav>
        <ul id="menu-list">
          <li><a href="#">Quem somos</a></li>
          <li><a href="#">Quero ser mentor</a></li>
          <li><a href="#">Quero ser mentorado</a></li>
        </ul>
      </nav>
      <img src="{{ asset('img/menu-icon.png') }}" class="menu-icon" alt="icone-menu" onclick="toggleMenu()">
    </div>

    <main class="hero-center">
      <h2>Sozinho você vai mais rápido, mas juntos vamos mais longe!</h2>
      <img src="{{ asset('img/hero-image.png') }}" alt="imagem-tech">
    </main>

    <div class="text-orange">
      <p>A <span>Technical Share</span> é uma plataforma que <span>conecta profissionais</span> da área de tecnologia a estudantes para a <span>troca de experiências</span> por meio de mentorias.</p>
    </div>

    <div class="card-info">
      <div class="card-box">
        <h3>O que é mentoria?</h3>
        <p>É um processo prático de crescimento profissional em que um mentor ensina ou dá ajuda e conselhos a uma pessoa menos experiente</p>
      </div>
      <div class="card-box">
        <h3>Objetivo da mentoria</h3>
        <p>Possibilitar a troca de experiências entre profissionais que já atuam no mercado e estudantes que estão iniciando ou em transição de carreira</p>
      </div>
      <div class="card-box">
        <h3>Como funciona?</h3>
        <p>O mentorado agenda a mentoria conforme o tipo de assunto que deseja desenvolver e conforme a disponibilidade do mentor</p>
      </div>
    </div>

    <footer>

    </footer>
  </div>

  <script>
    var menuList = document.getElementById("menu-list");
    menuList.style.maxHeight = "0px";

    function toggleMenu() {
      if (menuList.style.maxHeight == "0px") {
        menuList.style.maxHeight = "130px";
      } else {
        menuList.style.maxHeight = "0px";
      }
    }
  </script>
</body>

</html>