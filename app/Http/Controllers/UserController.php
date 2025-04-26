<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|unique:users,email',
            'password'   => 'required|min:6|confirmed',
 
        ]);


        return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
    }
}
