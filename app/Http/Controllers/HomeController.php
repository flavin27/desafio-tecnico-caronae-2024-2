<?php

namespace App\Http\Controllers;

use App\Services\CaronasService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {

        $data  = CaronasService::getCaronas();
        return view('home', ['caronas' => $data]);
    }

    public function show ($id) {
        $data = CaronasService::getCaronaById($id);
        return view('show', ['carona' => $data]);
    }
}
