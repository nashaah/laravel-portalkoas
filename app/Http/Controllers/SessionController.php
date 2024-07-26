<?php

namespace App\Http\Controllers;

use App\Models\Koas;
use App\Models\Pembimbing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function error()
    {
        return view('error');
    }

    function login(Request $request)
    {
        $request->validate([
            'userno' => 'required',
            'password' => 'required',

        ], [
            'userno.required' => 'Harap mengisi kolom NIM/No. User',
            'password.required' => 'Harap mengisi kolom password',
        ]);

        $infologin = [
            'userno' => $request->userno,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {

            session(['lastActivityTime' => now()]);

            $user = Auth::user();

            if($user->role == 'admin'){
                return redirect('/operator');
            } elseif($user->role == 'pengajar'){
                $pengajar = Pembimbing::where('userID',$user->id)->first();
                return view('pengajar.dbpengajar', compact('user','pengajar'));
            } else {
                $pelajar = Koas::where('userID',$user->id)->first();
                return view('pelajar.dbpelajar', compact('user','pelajar'));
            }
        } else {
            return redirect('')->withErrors('NIM/No. User dan password yang dimasukan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        session()->forget('lastActivityTime');
        return redirect('');
    }
}
