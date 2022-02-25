<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Exception;

class LoginAuthController extends Controller
{
    
    /**
     * User login API method
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

     public function login(Request $request){

         $data = $request->validate([


            'email' => 'required|email',
            'password' => 'required'

        ]);

        if(!Auth()->attempt($data)) {
            return reponse(['error_message' => 'Incoreect try again']);

        }

        $token = Auth()->user()->createToken('API Token')->accessToken;

        return response(['user' => Auth()->user(), 'token' => $token]);
    }
}
