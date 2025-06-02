<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
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

        return view('pages.test');

    }

    function send_mail(){
        Mail::to('customer@growthlevelacademy.com')->later(now()->addMinute(),new WelcomeMail());
    }

    function loacal_ar(){
        Session::put('lang','ar');
        return back();
    }

    function loacal_en(){
        Session::put('lang','en');
        return back();
    }
}
