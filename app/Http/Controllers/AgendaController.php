<?php

namespace App\Http\Controllers;
use App\Entities\Person;



class AgendaController extends Controller
{

    public function index($letra = "A" ) { // Se não houver letra nenhuma, ele carrega a letra A
        $peoples = Person::where('name', 'like', $letra.'%')->get();
        return view('agenda', compact('peoples'));
    }
}