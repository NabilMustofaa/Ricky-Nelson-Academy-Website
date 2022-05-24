<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use HasFactory,Sluggable;
    protected $guarded=[
        'id',
    ];
    protected $attributes = [
        'image'=>'https://images.unsplash.com/photo-1653330670377-dcbeb441f14d?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul_artikel'
            ]
        ];
    }
}
