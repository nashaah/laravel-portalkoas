<?php

namespace App\Http\Controllers;

use App\Models\Koas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembimbing;

class AdminController extends Controller
{
    function index(){
        echo "Halo, selamat datang";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Log Out</a>";
    }

    function operator(){
        echo "Halo, selamat datang Admin";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Log Out</a>";
    }

    function pelajar(){
        $user = Auth::user();
        $pelajar = Koas::where('userID', $user->id)->first();
        return view ('pelajar/dbpelajar', compact('user','pelajar'));
    }

    function pengajar(){
        $user = Auth::user();
        $pengajar = Pembimbing::where('userID',$user->id)->first();
        return view('pengajar/dbpengajar', compact('user','pengajar'));
    }
}
