<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $table = 'batch';

    protected $fillable = [
        'batch_ID',
        'NIM_ketua',
        'tanggal_masuk',
    ];

    public function koas(){
        return $this->hasMany(Koas::class,'batch_ID','batch_ID');
    }

    public function bimbingan(){
        return $this->hasMany(Bimbingan::class,'batch_ID','batchID');
    }
}