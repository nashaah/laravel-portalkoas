<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\Batch;
use App\Models\Pembimbing;
use App\Models\Koas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KoasController extends Controller
{
    public function viewjadwal()
    {
        $user = Auth::user();
        $pelajar = Koas::where('userID', $user->id)->first();
        return view('pelajar/jadwalkoas', compact('pelajar'));
    }
}