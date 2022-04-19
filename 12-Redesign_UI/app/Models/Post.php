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


    // Method untuk menghubungkan model Category
    public function category() {

        // Mereturn relasi dari model Post terhadap model Category
        return $this->belongsTo(Category::class);

    }

    // Method untuk menghubungkan model User
    public function author() {

        // Mereturn relasi dari model Post terhadap model User
        return $this->belongsTo(User::class, 'user_id');        // Memanggil kolom user_id

    }

    
}

