<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ResponseTrait;
    //

    public function login(Request $request){
        $validate = Validator::make($request->all(),[
            'email'=>'required|email:dns.rfc|exists:users,email',
            'password'=>'required|string|min:8',
        ]);

        if ($validate->fails()) {
            # code...
            return $this->sendError($validate->errors());
        }


    }
}
