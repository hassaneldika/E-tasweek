<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ResetRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Exception;
use App\Models\User; 
use Illuminate\Support\Facades\DB;

class ResetController extends Controller
{
    public function ResetPassword(ResetRequest $request) {
        $email = $request->email;
        $token = $request->token;
        $password = Hash::make($request->password);

        $emailcheck = DB::table('password_resets')->where('email', $email)->first();
        $pincheck = DB::table('password_resets')->where('token',$token)->first();

        if(!$emailcheck) {
            return response([
                'message' => "Email Not found"
            ],401);
        }
        if(!$pincheck) {
            return response([
                'message' => "Pin code invalid"
            ],401);
        }

        DB::table('users')->where('email',$email)->update(['password' => $password]);
        DB::table('password_resets')->where('email',$email)->delete();
        return response([
            'message' => "Password change seccessfully"
        ],200);

    }
}
