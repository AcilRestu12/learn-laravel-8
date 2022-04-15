<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Variabel untuk menyimpan attribute / field mana yg dapat diisi dengan menggunakan Post:create(), sisanya tidak dapat
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Variabel untuk menjaga attribute / field mana yg tidak dapat diisi dengan menggunakan Post:create(), sisanya dapat diisi
    protected $guarded = ['id'];
    
}

