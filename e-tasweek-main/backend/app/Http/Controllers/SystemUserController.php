<?php

namespace App\Http\Controllers;

use App\Models\SystemUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SystemUserController extends Controller
{
    //get SystemUser
    public function index(): JsonResponse
    {
        $systemUser = SystemUser::all();
        return response()->json($systemUser);
    }

    //get SystemUser By Id
    public function show($id): JsonResponse
    {
        $systemUser = SystemUser::findOrFail($id);
        return response()->json($systemUser);
    }

    //add SystemUser
    public function store(Request $request): JsonResponse
    {
        $systemUser = new SystemUser();
        $systemUser->su_f_name = $request->su_f_name;
        $systemUser->su_l_name = $request->su_l_name;
        $systemUser->su_email = $request->su_email;
        $systemUser->su_phone = $request->su_phone;
        $systemUser->su_username = $request->su_username;
        $systemUser->su_password = $request->su_password;
        $systemUser->system_roles_id = $request->system_roles_id;
        $systemUser->save();
        return response()->json(["message" => "User Added Successfully"]);
    }

    //delete SystemUser
    public function destroy($id): JsonResponse
    {
        $systemUser = SystemUser::findOrFail($id);
        $systemUser->delete();
        return response()->json(["message" => "User deleted"]);
    }

    //update SystemUser
    public function update(Request $request, $id): JsonResponse
    {
        $systemUser = SystemUser::findOrFail($id);
        $newInput = $request->except(["_method", "token"]);
        $systemUser->update($newInput);
        return response()->json(["message" => "User Updated"]);
    }
}
