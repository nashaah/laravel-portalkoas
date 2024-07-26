<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $table = 'bimbingan';

    protected $fillable = [
        'kelasID',
        'pembimbingID',
        'batchID',
        'tanggal',
        'waktu',
        'topik',
        'lokasi',
        'type'
    ];

    public function pembimbing(){
        return $this->belongsTo(Pembimbing::class, 'pembimbingID','pembimbingID');
    }

    public function koasbatch(){
        return $this->belongsTo(Batch::class,'batchID','batch_ID');
    }
}