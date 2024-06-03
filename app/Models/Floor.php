<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table = 'floors';
    use HasFactory;

    protected $fillable = [
        'title',
        'judul_lantai',
        'narasi_lantai',
        'contoh_output',
        'from_code',
    ];

    // Jika Anda ingin menyimpan data waktu dengan format waktu Laravel
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}