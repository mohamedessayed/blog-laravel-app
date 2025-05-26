<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

        $user = User::where('email','=',$request->email)->first();

        if (!$user || !Hash::check($request->password,$user->password)) {
            # code...
            return $this->sendError([],'Invalid credentials');
        }

        $token = $user->createToken('LaravelGrowth-AuthToken')->plainTextToken;

        return $this->sendSuccess(['token'=>$token]);
    }

    public function logout(){
        auth('api')->user()->tokens()->delete();
        return $this->sendSuccess([],'Log out sucessfully');
    }
}
