<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    public function emailExists(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $result = false;
        if (!$user || ($request->ignoreId && $user->id == $request->ignoreId)) {
            $result = true;
        }
        return response()->json($result);
    }

    public function userNameExists(Request $request)
    {
        $user = User::where('name', $request->name)->first();
        $result = false;
        if (!$user || ($request->ignoreId && $user->id == $request->ignoreId)) {
            $result = true;
        }
        return response()->json($result);
    }
}
