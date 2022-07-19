<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function index(){
        return view('devices.index');
    }

    public function create(){
        return view('devices.create');
    }

    public function show($device){
        return view('devices.show' , ['devices'=>$device]);
    }
}
