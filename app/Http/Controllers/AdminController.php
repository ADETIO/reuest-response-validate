<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|string',
            'role' => 'required|in:super_admin,kasir',
        ]);

        // Simpan ke database (opsional)

        return back()->with('success', 'Data admin berhasil dikirim.');
    }
}
