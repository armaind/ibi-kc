<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiPuskesmas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'puskesmas', 'kodepuskesmas', 'alamatpuskesmas', 'jenispuskesmas'
    ];
}
