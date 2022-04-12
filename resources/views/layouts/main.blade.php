<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/styles.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">Technical Share</div>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="/home">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Home</span>
                </a>
                <a href="#">
                    <!--<span class="tooltip">Perfil</span>-->
                </a>
            </li>
            <li>
                <a href="/mensagens">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Mensagens</span>
                </a>
                <a href="#">
                    <!--<span class="tooltip">Perfil</span>-->
                </a>
            </li>
            <li>
                <a href="/agenda">
                    <i class="bx bx-calendar"></i>
                    <span class="links_name">Agenda</span>
                </a>
                <a href="#">
                    <!--<span class="tooltip">Perfil</span>-->
            </li>
            <li>
                <a href="/perfil">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Perfil</span>
                </a>
                <a href="/perfil">
                    <!--<span class="tooltip">Perfil</span>-->
                </a>
            </li>
        </ul>
    </div>

    <div class="home_content">
        <div class="text">
            @yield('content')
        </div>

    </div>

    <script src="/js/script.js"></script>
</body>

</html>