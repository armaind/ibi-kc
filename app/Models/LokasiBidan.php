<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiBidan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nrbidan', 'name', 'puskesmas'
    ];
}
