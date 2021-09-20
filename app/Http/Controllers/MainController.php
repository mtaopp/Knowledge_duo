<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainController extends Controller
{
    public function showAll() {

        $posts = Main::all();

        return view('main', ['posts' => $posts]);
    }


}
