<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@700&family=Inter:wght@400;500;700&family=Work+Sans:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/pesquisar-mentoria.css') }}" />

  <title>Pesquisar Profissionais | Technical Share</title>
</head>

<body>
  <nav>
    <ul>
      <li>
        <a href="#">
          <span class="icon"><img src="{{ asset('img/Charlie-Hunnam.png') }}" alt="Imagem Perfil" /></span>
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
    <form action="#">
      <ul>
        <li><button type="submit">TODOS</button></li>
        <li><button type="submit">DEV</button></li>
        <li><button type="submit">UX</button></li>
      </ul>
    </form>

    <section class="close-swiper">
      <div class="swiper mySwiper container">
        <div class="swiper-wrapper content">
          <div class="swiper-slide card">
            <div class="card-content">
              <h3>Product Owner - PO</h3>
              <div class="image">
                <img src="img/img1.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(11)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Rafael Garcia</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">UI<br />
                    UX Research</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  O Rafa é Product Owner - PO há 1 ano, adora cachorros e
                  pedalar. Nas horas vagas gosta de cozinhar.
                </p>
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

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>Product Manager - PM</h3>
              <div class="image">
                <img src="img/img2.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(15)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Ricardo Freitas</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">UI<br />
                    UX Writing</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  O Ric é Product Manager - PM há 2 anos, adora viajar e
                  assistir séries. Nas horas vagas sai para dançar.
                </p>
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

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>UX Designer</h3>
              <div class="image">
                <img src="img/img3.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(11)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Gabriela Oliveira</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">UX Strategy<br />
                    UX Research</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  A Gabi é UX Designer há 3 anos, adora karaokê e praia. Nas
                  horas vagas gosta de receber os amigos.
                </p>
              </div>

              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <div class="button">
                <button class="agendar">Agendar</button>
              </div>
            </div>
          </div>

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>UX Designer</h3>
              <div class="image">
                <img src="img/img4.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(13)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Carla Martins</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">UI<br />
                    UX Research</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  A Carla é UX Designer há 6 anos, adora ler livros e animais.
                  Nas horas vagas gosta de dormir.
                </p>
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

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>Front End</h3>
              <div class="image">
                <img src="img/img5.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(15)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Estela Castro</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">Angular.js<br />
                    Vue.js</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  A Estela é desenvolvedora- Front há 1 ano, adora cantar e
                  sair. Nas horas vagas gosta de cozinhar.
                </p>
              </div>

              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <div class="button">
                <button class="agendar">Agendar</button>
              </div>
            </div>
          </div>

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>Backend</h3>
              <div class="image">
                <img src="img/img6.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(14)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Lina Campbell</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">Laravel<br />
                    PHP</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  A Lina é desenvolvedora - back há 2 anos, adora malhar e
                  correr. Nas horas vagas gosta de ver filmes.
                </p>
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

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>Mobile</h3>
              <div class="image">
                <img src="img/img7.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(12)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Marcos Gabriel</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">Kotlin<br />
                    Java</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  O Marcos é desenvolvedor- Mobile há 5 anos, adora futebol e
                  sair. Nas horas vagas gosta de ver séries.
                </p>
              </div>

              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <div class="button">
                <button class="agendar">Agendar</button>
              </div>
            </div>
          </div>

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>Full Stack</h3>
              <div class="image">
                <img src="img/img8.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(12)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Júlio Cesar</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">Django<br />
                    Ruby</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  O Júlio é desenvolvedor- - Fullstack há 1 ano, adora ler e
                  ver filmes. Nas horas vagas gosta de cozinhar.
                </p>
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

          <div class="swiper-slide card">
            <div class="card-content">
              <h3>FrontEnd</h3>
              <div class="image">
                <img src="img/img9.svg" alt="" />
              </div>

              <div class="media-icons">
                <img class="logo-card" src="{{ asset('img/logo-cards.png')}}" />
                <div class="fav">
                  <i class="fa-solid fa-heart"></i>
                  <span>(11)</span>
                </div>
              </div>

              <div class="name-profession">
                <span class="name">Daniel Barbosa</span>
                <span class="profession">
                  Especialidade<br />
                  <span class="especialidade">React<br />
                    jQuery</span>
                </span>
              </div>

              <div class="descricao">
                <p>
                  O Daniel é desenvolvedor- front há 1 ano, adora caminhar e
                  ler. Nas horas vagas gosta de cozinhar.
                </p>
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
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>

    <section class="card-close">
      <div class="swiper-slide card">
        <div class="card-content">
          <h3>Product Owner - PO</h3>
          <div class="image">
            <img src="img/img1.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(11)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Rafael Garcia</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">UI<br />
                UX Research</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              O Rafa é Product Owner - PO há 1 ano, adora cachorros e pedalar.
              Nas horas vagas gosta de cozinhar.
            </p>
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

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>Product Manager - PM</h3>
          <div class="image">
            <img src="img/img2.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(15)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Ricardo Freitas</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">UI<br />
                UX Writing</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              O Ric é Product Manager - PM há 2 anos, adora viajar e assistir
              séries. Nas horas vagas sai para dançar.
            </p>
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

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>UX Designer</h3>
          <div class="image">
            <img src="img/img3.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(11)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Gabriela Oliveira</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">UX Strategy<br />
                UX Research</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              A Gabi é UX Designer há 3 anos, adora karaokê e praia. Nas horas
              vagas gosta de receber os amigos.
            </p>
          </div>

          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <div class="button">
            <button class="agendar">Agendar</button>
          </div>
        </div>
      </div>

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>UX Designer</h3>
          <div class="image">
            <img src="img/img4.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(13)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Carla Martins</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">UI<br />
                UX Research</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              A Carla é UX Designer há 6 anos, adora ler livros e animais. Nas
              horas vagas gosta de dormir.
            </p>
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

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>Front End</h3>
          <div class="image">
            <img src="img/img5.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(15)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Estela Castro</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">Angular.js<br />
                Vue.js</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              A Estela é desenvolvedora- Front há 1 ano, adora cantar e sair.
              Nas horas vagas gosta de cozinhar.
            </p>
          </div>

          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <div class="button">
            <button class="agendar">Agendar</button>
          </div>
        </div>
      </div>

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>Backend</h3>
          <div class="image">
            <img src="img/img6.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(14)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Lina Campbell</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">Laravel<br />
                PHP</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              A Lina é desenvolvedora - back há 2 anos, adora malhar e correr.
              Nas horas vagas gosta de ver filmes.
            </p>
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

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>Mobile</h3>
          <div class="image">
            <img src="img/img7.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(12)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Marcos Gabriel</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">Kotlin<br />
                Java</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              O Marcos é desenvolvedor- Mobile há 5 anos, adora futebol e
              sair. Nas horas vagas gosta de ver séries.
            </p>
          </div>

          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>

          <div class="button">
            <button class="agendar">Agendar</button>
          </div>
        </div>
      </div>

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>Full Stack</h3>
          <div class="image">
            <img src="img/img8.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(12)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Júlio Cesar</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">Django<br />
                Ruby</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              O Júlio é desenvolvedor- - Fullstack há 1 ano, adora ler e ver
              filmes. Nas horas vagas gosta de cozinhar.
            </p>
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

      <div class="swiper-slide card">
        <div class="card-content">
          <h3>FrontEnd</h3>
          <div class="image">
            <img src="img/img9.svg" alt="" />
          </div>

          <div class="media-icons">
            <img class="logo-card" src="{{ asset('img/logo.png')}}" />
            <div class="fav">
              <i class="fa-solid fa-heart"></i>
              <span>(11)</span>
            </div>
          </div>

          <div class="name-profession">
            <span class="name">Daniel Barbosa</span>
            <span class="profession">
              Especialidade<br />
              <span class="especialidade">React<br />
                jQuery</span>
            </span>
          </div>

          <div class="descricao">
            <p class="card-p">
              O Daniel é desenvolvedor- front há 1 ano, adora caminhar e ler.
              Nas horas vagas gosta de cozinhar.
            </p>
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
    </section>
  </main>

  <script src="https://kit.fontawesome.com/5871f9f580.js" crossorigin="anonymous"></script>
</body>

</html>