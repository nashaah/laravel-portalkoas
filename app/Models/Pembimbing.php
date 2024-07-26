<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;

    protected $table = 'pembimbing';

    protected $fillable = [
        'pembimbingID',
        'nama',
        'telp',
        'email',
        'poliID',
        'userID'
    ];

    public function user(){
        return $this->belongsTo(User::class,'userID', 'id');
    }

    public function bimbingan(){
        return $this->hasMany(Bimbingan::class,'pembimbingID','pembimbingID');
    }
}
