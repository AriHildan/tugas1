<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatPeriksa extends Model
{
    use HasFactory;

    protected $table = 'obat_periksa'; // ini penting, agar Laravel tidak mencari 'obat_periksas'

    protected $fillable = [
        'periksa_id',
        'obat_id',
        'jumlah',
    ];

    public $timestamps = false; // kalau tabel ini tidak punya created_at / updated_at
}