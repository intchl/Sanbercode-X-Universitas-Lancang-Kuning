<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view(('pages.register'));
    }

    public function addData(Request $request)
    {
        $namaAwal = $request['fname'];
        $namaAkhir = $request['lname'];

        return view('pages.home', ['fname' => $namaAwal, 'lname' => $namaAkhir]);
    }
}
