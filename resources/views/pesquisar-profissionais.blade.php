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
    <link rel="stylesheet" href="{{ asset('css/pesquisar-mentoria.css') }}" />

    <title>Pesquisar Profissionais | Technical Share</title>
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
          <a href="#">
            <span class="icon"><i class="fa-solid fa-house"></i></span>
            <span class="title">Home</span>
          </a>
        </li>
        <li>
          <a href="#">
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

    <header>
      <h2>Pesquisar profissionais</h2>
      <img src="{{ asset('img/logo-final.png') }}" alt="Logo" />
    </header>

    <main>
      <h4>Pesquisar profissionais</h4>
      <form action="#">
        <h4>Trilha de carreira</h4>
        <ul>
          <li><button type="submit">Todos</button></li>
          <li><button type="submit">Dev</button></li>
          <span></span>
          <li><button type="submit">UX</button></li>
        </ul>

        <div class="swiper-slide card UX">
          <div class="card-content">
            <h3>Product Owner - PO</h3>
            <div class="image">
              <img src="img/img1.svg" alt="">
            </div>

            <div class="media-icons">
              <img class="logo-card" src="img/logo-cards.png">
              <div class="fav">
                <i class="fa-solid fa-heart"></i>
                <span>(11)</span>
              </div>
            </div>

            <div class="name-profession">
              <span class="name">Rafael Garcia</span>
              <span class="profession">
                Especialidade<br>
               <span class="especialidade">UI<br>
                UX Research</span> 
              </span>
            </div>

            <div class="descricao">
              <p>O Rafa é Product Owner - PO há 1 ano, adora cachorros e pedalar.
              Nas horas vagas gosta de cozinhar.</p>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <div class="button">
              <button class="agendar">Agendar</button>
            </div>
          </div>
        </div>
        <button class="btn-pesquisar" type="submit">PESQUISAR</button>
      </form>
    </main>
      
    <script
      src="https://kit.fontawesome.com/5871f9f580.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>