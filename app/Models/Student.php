<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'whatsapp', 'formulir_pendaftaran', 'fotocopy_nisn', 'fotocopy_kk',
        'fotocopy_akte_kelahiran', 'fotocopy_ktp_ortu', 'pas_foto', 'fotocopy_ijazah'
    ];
}

