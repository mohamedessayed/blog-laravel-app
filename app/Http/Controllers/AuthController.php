<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    //

    public function login(): View{
        return view('auth.login');
    }

    public function login_handel(Request $request) {

        $request->validate([
            'email'=>'required|email:dns.rfc',
            'password'=>'required|string|min:8'
        ]);

        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {
            # code...
            $request->session()->regenerate();
            return redirect()->route('book.index');
        }

        return back()->with('errorMassage','Email or password are not correct, please chack it and retry again');


    }

    public function signup(): View{
        return view('auth.signup');
    }

    public function signup_handel(Request $request) {
        
        $request->validate([
            'fullname'=>'required|string|min:9',
            'email'=>'required|email:dns.rfc|unique:users,email',
            'password'=>'required|string|min:8',
            'phone'=>'required|string|min:11'
        ]);

        try {
            $user = User::create([
                'name'=>$request->fullname,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

            // $phone = Phone::create([
            //    'phone'=>$request->phone,
            //    'user_id'=>$user->id 
            // ]);

            $user->phone()->create(['phone'=>$request->phone]);


            return back()->with('message','User created successfully!');

        } catch (\Throwable $th) {
            //throw $th;

        return back()->with('errorMassage',$th->getMessage());

        }

        
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('home');
    }
    
}
