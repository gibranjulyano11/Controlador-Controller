<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "bienvenidos a la pagina principal";
    }
    public function create(){
        return "en esta pagina podras crear un curso";
    }
    public function show($curso){
        return "Bienvenido al curso: $curso";
    }

}
