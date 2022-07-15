<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function index(){
        return 'Index de Dispositivos médicos BioMed';
    }

    public function create(){
        return 'Página para agregar Dispositivos médicos BioMed a la base de datos';
    }

    public function show($device){
        return "Muestra información del Dispositivos médicos BioMed: $device";
    }
}
