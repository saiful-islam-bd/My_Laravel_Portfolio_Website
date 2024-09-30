<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Intro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $intros = Intro::get();

        $about = About::get();

        return view('home.index', compact('intros', 'about'));
    }


}
