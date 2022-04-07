<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/page-landing/page-landing.css') }}" rel="stylesheet">

  <title>Technical Share</title>
</head>

<body id="page-landing">
  <div id="container">
    <div class="logo-container">
      <img src="{{ asset('img/logo_transparent.png') }}" alt="Technical Share Logo" />
      <h1>Plataforma onde você encontra pessoas da tecnologia</h1>
      <p>Você poderá achar um profissional ideal para sua área de estudo e ter oportunidade de agendar desde um bate-papo mais rápido até uma mentoria mais complexa, onde vocês poderão trocar conhecimentos</p>
    </div>

    <img class="hero-image" src="{{ asset('img/home-intro.png') }}" alt="Plataforma de Estudos">

    <div class="buttons-container">
      <a href="/tela_1" class="study">
        <img src="{{ asset('img/studying.png')}} " alt="Estudar">
        Aluno
      </a>
      <a href="/tela_2" class="give-classes">
        <img src="{{ asset('img/teachings.png')}}" alt="Dar aulas">
        Mentor
      </a>
    </div>

    <p class="connections">
      300 conexões realizadas
      <img src="{{ asset ('img/orange-juice32.png')}}" alt="orange-juice">
    </p>
  </div>
</body>

</html>