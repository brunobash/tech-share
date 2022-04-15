<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/agendar-mentoria.css') }}" rel="stylesheet">

  <title>Agendar Mentoria | Technical Share</title>
</head>

<body>
  <div class="container">
    <header>
      <button class="btn-back"><img src="{{ asset('img/seta-para-tras.png')}}" alt="Botao Voltar"></button>
      <div class="photo-perfil">
        <img class="logo-card" src="{{ asset('img/img1.svg')}}">
      </div>

      <div class="name-profession">
        <span class="name">Rafael Garcia</span><br>
        <span class="especialidade">
          <span class="primary">
            UI<br>
          </span>
          <span class="secondary">
            UX Research
          </span>
        </span>
      </div>
    </header>

    <h2>Escolher data</h2>

    <main>
      <div class="calendar">
        <div class="month-week">
          <span class="btn-prev-next"><img src="{{ asset('img/seta-para-tras.png')}}" alt="Botão Voltar"></span>
          <h1>Abril</h1>
          <span class="btn-prev-next"><img src="{{ asset('img/seta-direita.png')}}" alt="Botão próximo"></span>
          <div class="year">
            <span>2022</span>
          </div>
        </div>
        <div class="weeks">
          <span>D</span>
          <span>S</span>
          <span>T</span>
          <span>Q</span>
          <span>Q</span>
          <span>S</span>
          <span>S</span>
        </div>
        <div class="days">
          <span class="next-prev-month">28</span>
          <span class="next-prev-month">29</span>
          <span class="next-prev-month">30</span>
          <span class="next-prev-month">31</span>
          <span class="unavailable">1</span>
          <span class="avaible">2</span>
          <span class="avaible">3</span>
        </div>
        <div class="days">
          <span class="avaible">4</span>
          <span class="unavailable">5</span>
          <span class="unavailable">6</span>
          <span class="unavailable">7</span>
          <span class="avaible">8</span>
          <span class="unavailable">9</span>
          <span class="avaible">10</span>
        </div>
        <div class="days">
          <span class="avaible">11</span>
          <span class="unavailable">12</span>
          <span class="unavailable">13</span>
          <span class="avaible">14</span>
          <span class="unavailable">15</span>
          <span class="unavailable">16</span>
          <span class="avaible">17</span>
        </div>
        <div class="days">
          <span class="avaible">18</span>
          <span class="unavailable">19</span>
          <span class="unavailable">20</span>
          <span class="unavailable">21</span>
          <span class="unavailable">22</span>
          <span class="unavailable">23</span>
          <span class="avaible">24</span>
        </div>
        <div class="days">
          <span class="avaible">25</span>
          <span class="unavailable">26</span>
          <span class="unavailable">27</span>
          <span class="unavailable">28</span>
          <span class="unavailable">29</span>
          <span class="unavailable">30</span>
          <span class="next-prev-month">1</span>
        </div>
      </div>

      <div class="select-date">
        <select name="dates" class="dates">
          <option value="">selecione</option>
          <option value="date1">02/04/2022</option>
          <option value="date2">03/04/2022</option>
          <option value="date3">04/04/2022</option>
          <option value="date4">08/04/2022</option>
          <option value="date5">10/04/2022</option>
          <option value="date6">11/04/2022</option>
          <option value="date7">14/04/2022</option>
          <option value="date8">17/04/2022</option>
          <option value="date8">18/04/2022</option>
          <option value="date8">24/04/2022</option>
          <option value="date8">25/04/2022</option>
        </select>
      </div>
    </main>

    <div class="select-hours">
      <h2 class="choose-hours">Escolher horário</h2>
      <select name="hours">
        <option value="">selecione</option>
        <option value="hours1">08:00</option>
        <option value="hours2">09:00</option>
        <option value="hours3">10:00</option>
        <option value="hours4">11:00</option>
        <option value="hours5">12:00</option>
        <option value="hours6">13:00</option>
        <option value="hours7">14:00</option>
        <option value="hours8">15:00</option>
      </select>
    </div>

    <div class="btn-confirmed-cancel">
      <button type="button" class="btn btn-primary confirmed" data-toggle="modal" data-target="#modalExemplo">CONFIRMAR AGENDAMENTO</button>
      <button class="cancel">CANCELAR</button>

      <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Mentoria Agendada</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal">VERIFICAR AGENDA</button>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>

  <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>