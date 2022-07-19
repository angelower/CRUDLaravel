@extends('layouts.layout')

@section('content')
    <h2>CREAR REGISTRO DE DISPOSITIVO MÉDICO</h2>
    <form action="/devices" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre del Dispositivo: </label>
            <input type="text" id="device" name="device" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Marca: </label>
            <input type="text" id="brand" name="brand" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo: </label>
            <input type="text" id="model" name="model" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"># de Mantemientos / año: </label>
            <input type="text" id="mtto" name="mtto" class="form-control" tabindex="5">
        </div>
        <a href="/devices" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>
@endsection
