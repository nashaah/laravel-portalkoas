<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\Batch;
use App\Models\Pembimbing;
use App\Models\Koas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembimbingController extends Controller
{
    public function viewjadwal()
    {
        $user = Auth::user();
        $pengajar = Pembimbing::where('userID', $user->id)->first();
        $bimbingan = Bimbingan::where('pembimbingID', $user->userno)->get();
        return view('pengajar/jadwalpengajar', compact('user', 'pengajar', 'bimbingan'));
    }

    public function viewkoas()
    {
        $user = Auth::user();
        $pengajar = Pembimbing::where('userID', $user->id)->first();
        
        $bimbingan = Bimbingan::where('pembimbingID', $pengajar->pembimbingID)->get();

        
        $batchIDs = $bimbingan->pluck('batchID')->unique();
        $batches = Batch::whereIn('batch_ID', $batchIDs)->get();

        $koas = Koas::whereIn('batch_ID', $batchIDs)->get();

        $ketua = Koas::whereIn('NIM', $batches->pluck('NIM_ketua'))->get()->keyBy('NIM');

        return view('pengajar/daftarkoas', compact('user', 'pengajar', 'batches','koas','ketua'));
    }
}
