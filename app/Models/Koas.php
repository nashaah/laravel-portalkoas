<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koas extends Model
{
    use HasFactory;

    protected $table = 'koas';

    protected $fillable = [
        'userID',
        'nama_depan',
        'nama_belakang',
        'telp',
        'email',
        'batch_ID',
        'kampusID',
        'status',
        'NIM_ketua'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function koasbatch(){
        return $this->belongsTo(Batch::class,'batch_ID','batch_ID');
    }
}
