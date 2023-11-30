<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

     // mengcustom table ke database agar tidak rancu
     protected $table = 'tb_admin';

     // mendeskripsi table ke database
     protected $fillable = [
         'id_admin',
         'nama_admin',
         'alamat',
         'no_hp',
         'gambar_admin',
     ];
}