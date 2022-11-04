<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('home', [
            "products" => Product::all()->take(3)
        ]);
    }

    public function about_us(): Factory|View|Application
    {
        return view("about_us");
    }
}
