<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.passwords.change');
    }

    public function changepassword(Request $request)
    {
        $validation_array = [
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ];

        $this->validate($request, $validation_array);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            $respuesta = redirect()->route('login')->with('successMsg', "Password has succesfully changed");
        } else {
            $respuesta = redirect()->back()->with('errorMsg', "Current Password is invalid");
        }


        return $respuesta;
    }
}
