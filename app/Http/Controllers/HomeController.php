<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::get();
        // $cars = Car::find(1);
        $cars = Car::where('maker_id', '1')->get()->first();
        $cars = Car::orderBy('publish_at', 'desc')->get();
        dump($cars);

        return view('home', compact('cars'));
    }
}
