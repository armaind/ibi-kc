<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nomerregistrasi','nomerdokumen', 'nomerrevisi', 'tanggalterbit', 'halaman', 'keg1', 'keg2', 'keg3', 'keg4', 'keg5', 'keg6', 'keg7', 'keg8', 'keg9', 'keg10', 'keg11', 'keg12'
    ];
}
