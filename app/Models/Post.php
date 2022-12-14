<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $guarded = ['id'];

    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id'); // relasi post dengan produk, 1 post mengandung 1 produk
    }
    
}

