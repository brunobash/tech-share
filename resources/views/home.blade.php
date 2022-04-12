@extends('layouts.main')

@section('title', 'Home')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home_card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        .filterDiv {
            float: left;
            background-color: #2196F3;
            color: #ffffff;
            width: 100px;
            line-height: 100px;
            text-align: center;
            margin: 2px;
            display: none;
        }

        .show {
            display: block;
        }

        .container {
            margin-top: 20px;
            overflow: hidden;
        }

        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            border-radius: 12px;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            background-color: #666;
            color: white;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <ul>
            <li><a href="/filtro">Filtrar</a></li>
        </ul>
    </nav>

    <div id="mentorias">
        <h3>Mentorias disponíveis</h3>
        <div class="mentorias_disponiveis">
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"><h4>Todos</h4></button>
                <button class="btn" onclick="filterSelection('dev')"><h4>Dev</h4></button>
                <button class="btn" onclick="filterSelection('ux')"><h4>Dev</h4></button>
            </div>

            <div class="container">
                <div class="filterDiv dev">Frontend</div>
                <div class="filterDiv dev">Backend</div>
                <div class="filterDiv dev">DevOps</div>
                <div class="filterDiv ux">UI</div>
                <div class="filterDiv ux">UX writting</div>
                <div class="filterDiv ux">UX searching</div>
            </div>


            <!-- ===================== CARDs =====================
    <div class="container">
        <div class="box">
            <div class="image">
                -<img src="img1.jpeg">
            </div>
            <div class="name">David Chrish</div>
            <div class="name_job">Dev Backend</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="skills">
                <p>
                    ReacJS, Vue.js, Node.js
                </p>
            </div>
            <div class="btns">
                <button>Read more</button>
                <button>Ver agenda</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                  <img src="img2.jpeg" alt="">
            </div>
            <div class="name">David Chrish</div>
            <div class="name_job">Dev Backend</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="skills">
                <p>
                    ReacJS, Vue.js, Node.js
                </p>
            </div>
            <div class="btns">
                <button>Read More </button>
                <button>Ver agenda</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img3.jpeg" alt="">
            </div>
            <div class="name">David Chrish</div>
            <div class="name_job">Dev Backend</div>
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="skills">
                <p>
                    ReacJS, Vue.js, Node.js
                </p>

            </div>
            <div class="btns">
                <button>Read More</button>
                <button>Ver agenda</button>
            </div>
        </div>
    </div>
-->
        </div>
    </div>

    <div class="create_mentoria">
        <!--<a href="/mentorias/create">Criar Mentoria</a>-->
    </div>


    <script src="/js/filter.js"></script>
</body>

@endsection