@extends('layouts.frontEnd')

@section('Conteudo')

<h2>Criar Usuario</h2>


    <form action="/usuarios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">username</label>
        <input id="username" name="username" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">name</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input id="password" name="password" type="password" class="form-control" tabindex="3">
    </div>

    <a href="/usuarios/lista" class="btn btn=secundary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4" >Salvar</button>

</form>

@endsection