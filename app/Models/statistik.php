<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Peserta (){
        return $this->belongsTo(Peserta::class,'peserta_id');
    }
    public function Jadwal (){
        return $this->belongsTo(Jadwal::class,'jadwal_id');
    }
}
