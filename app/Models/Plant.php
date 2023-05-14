<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $table = 'plants';
    protected $guarded = ['id'];

    //kode kolom mana yang bisa diisi
    protected $fillable = [
        'Nama_Tanaman', 'Asal_Tanaman', 'Deskripsi'
    ];
}
