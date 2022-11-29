<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id'); // relasi produk dengan kategori, 1 produk memiliki 1 kategori
    }
    public function post(){
        return $this->belongsTo(Post::class); // relasi produk dengan post, 1 produk terkandung dalam 1 post
    }
    }

  

