<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    //

    function index (): View {
        return view('index');
    }

    function blog(): View{
        return view('pages.blog');
    }

    function services(): View{
        return view('pages.service');
    }
}
