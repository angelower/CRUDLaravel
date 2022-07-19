@extends('layouts.layout')

@section('title' , 'Medical Devices List')
    
@section('content')
    <h1>Bienvenido a la lista de DM</h1>
    <div class="btn-group">
        <a href="devices/create" class="btn btn-primary" aria-current="page">CREAR DISPOSITIVO</a>
      </div>
      <br><br>
      <table class="table table-dark table-stripe">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">DISPOSITIVO</th>
            <th scope="col">MARCA</th>
            <th scope="col">MODELO</th>
            <th scope="col"># MTTO / AÑO</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
            <tr>
                <th scope="row">{{$device->id}}</th>
                <td>{{$device->device}}</td>
                <td>{{$device->brand}}</td>
                <td>{{$device->model}}</td>
                <td>{{$device->mtto}}</td>
                <td>
                    <a class="btn btn-info"> Editar</a>
                    <button  class="btn btn-danger">Borrar</button>
    
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection

