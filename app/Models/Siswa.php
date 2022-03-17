<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nis','kelas','tanggal_mulai_bergejala','hasil_antigen','hasil_pcr','gejala'];

    
}
