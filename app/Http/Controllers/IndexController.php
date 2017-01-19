<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $peoples = Peoples::all();
        return view('agenda', compact('peoples'));
    }

    //
}
