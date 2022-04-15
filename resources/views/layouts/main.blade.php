<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@700&family=Inter:wght@400;500;700&family=Work+Sans:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/agendamento.css') }}" />

    <title>@yield('title')</title>
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <a href="#">
            <span class="icon"
              ><img src="{{ asset('img/Charlie-Hunnam.png') }}" alt="Imagem Perfil"
            /></span>
            <span class="title">Olá, Jax!</span>
          </a>
        </li>
        <li>
          <a href="/home">
            <span class="icon"><i class="fa-solid fa-house"></i></span>
            <span class="title">Home</span>
          </a>
        </li>
        <li>
          <a href="/agenda">
            <span class="icon"><i class="fa-solid fa-clipboard-list"></i></span>
            <span class="title">Agenda</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa-regular fa-circle-user"></i></span>
            <span class="title">Editar Perfil</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fa-solid fa-circle-xmark"></i></span>
            <span class="title">Sair</span>
          </a>
        </li>
      </ul>
    </nav>
    </main>
      <main>
          @yield('content')
      </main>
    <script
      src="https://kit.fontawesome.com/5871f9f580.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>