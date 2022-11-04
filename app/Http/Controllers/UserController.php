<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reply;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_admin_panel() {
        return view("admin_panel", [
            "products" => Product::all(),
            "replies" => Reply::all()
        ]);
    }
}
