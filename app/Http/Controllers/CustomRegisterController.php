<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequestStore;
use App\Models\User;
use Illuminate\Http\Request;

class CustomRegisterController extends Controller
{
    public function registerShow(){
        return view('custom-auth.register');
    }
    public function registerUser(RegisterRequestStore $request){
        // dd($request->all());
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);
    }
}
