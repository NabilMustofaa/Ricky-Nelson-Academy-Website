<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $guarded=[
        'id'
    ];

    public function User (){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Pendaftaran (){
        return $this->belongsTo(Pendaftaran::class,'pendaftaran_id');
    }

    public function Statistik (){
        return $this->hasMany(Statistik::class,'peserta_id');
    }
}
