@extends('layouts.main')

@section('title', 'Agenda')

@section('content')
<link rel="stylesheet" href="/css/agenda.css">

<div class="main-container">
    <div class="title">
        <h2>Agenda de mentorias</h2>
    </div>
    <div class="navbar-agenda">
    </div>
    <div class="container-cards">



        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('todas')">TODAS</button>
            <button class="btn" onclick="filterSelection('todas')"> AGENDADAS</button>
            <button class="btn" onclick="filterSelection('realizadas')"> REALIZADAS</button>
            <button class="btn" onclick="filterSelection('canceladas')"> CANCELADAS</button>
        </div>

        <div class="container">
            <div class="filterDiv agendadas">
                <div class="content">
                    <div class="img_mentor">

                    </div>
                    <div class="mentor_details">

                    </div>
                    <div class="button_are">
                        <button>Remarcar</button>
                        <button>Cancelar Mentoria</button>
                    </div>
                </div>
            </div>
            <div class="filterDiv agendadas">
                <div class="content">
                    <div class="img_mentor">

                    </div>
                    <div class="mentor_details">

                    </div>
                    <div class="button_are">
                        <button>Remarcar</button>
                        <button>Cancelar Mentoria</button>
                    </div>
                </div>
            </div>
            <div class="filterDiv canceladas">
                <div class="content">
                    <div class="img_mentor">

                    </div>
                    <div class="mentor_details">

                    </div>
                    <div class="button_are">
                        <button>Remarcar</button>
                        <button>Cancelar Mentoria</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



</div>

</div>

<script>
    filterSelection("todas")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "todas") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

@endsection