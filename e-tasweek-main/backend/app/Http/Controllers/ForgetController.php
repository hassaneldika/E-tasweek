<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ForgetRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgetMail;
use Exception;


class ForgetController extends Controller
{
    public function ForgetPassword(ForgetRequest $request){
        $email = $request->email;

        if(User::where('email', $email)->doesntExist()) {
            return response([
                'message' => 'Invalid Email'
            ], 401);
        }

        $token = rand(10,100000);
        try{

            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token
            ]);

            //Mail send to user
            Mail::to($email)->send(new ForgetMail($token));

            return response([
                'message' => 'Reset Password Mail send on your email'
            ],200);


        }catch(Exception $exception) {
            return response([
                'message' => $exception->getMessage()
            ], 400);
        }
    }
}
