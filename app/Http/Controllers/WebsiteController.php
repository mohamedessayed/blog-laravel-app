<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

    function test_api() {
        // $data = Http::get('https://fakestoreapi.com/products')->json();

        $data = Http::withHeaders([
            'Authorization'=>env('NEWS_API_KEY')
        ])
        ->get('https://newsapi.org/v2/everything?q=tesla&from=2025-04-26&sortBy=publishedAt')
        ->json();

        dd($data);
    }
}
