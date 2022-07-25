@extends('layouts.layout')

@section('content')
    <h1>EDIT desde la carpeta view del proyecto</h1>
    <form action="/devices/{{$device->id}}" method="post">
        @csrf 
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre del Dispositivo: </label>
            <input type="text" id="device" name="device" class="form-control" tabindex="2" value="{{$device->device}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Marca: </label>
            <input type="text" id="brand" name="brand" class="form-control" tabindex="3" value="{{$device->brand}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo: </label>
            <input type="text" id="model" name="model" class="form-control" tabindex="4"  value="{{$device->model}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"># de Mantemientos / año: </label>
            <input type="text" id="mtto" name="mtto" class="form-control" tabindex="5"  value="{{$device->mtto}}">
        </div>
        <a href="/devices" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>
@endsection

