<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Requests\Estudante;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function quemsomos()
    {
        return view('site.quemsomos');
    }

    public function registrar(Estudante $request)
    {
        dd($request->all());
    }
}
