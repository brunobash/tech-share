@extends('layouts.main')

@section('title', 'Criar Mentoria')

@section('content')

<div id="mentoria_create_container">
    <h1>Crie sua mentoria</h1>
    <form action="/mentorias" method="POST">
        <div class="form-element">
            <label for="mentor">Mentor:</label>
            <input type="text" name="mentor" id="mentor" placeholder="Nome do mentor">
        </div>
        <div class="form-element">
            <label for="cargo">Cargo atual:</label>
            <input type="text" name="cargo" id="cargo" placeholder="Cargo atual">
        </div>
        <div class="form-element">
            <label for="mentor">Mentor:</label>
            <input type="text" name="mentor" id="mentor" placeholder="Nome do mentor">
        </div>
    </form>
</div>

@endsection