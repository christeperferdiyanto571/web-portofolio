<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simulasi pengiriman sukses
        return response()->json([
            'status' => 'success',
            'message' => 'Pesan berhasil dikirim! Saya akan segera menghubungi Anda.'
        ]);
    }
}
