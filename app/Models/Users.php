<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'username', 'email', 'password', 'telp_rumah', 'alamatrumah',
        'provinsir', 'kotar', 'kecamatanr', 'kodeposr', 'telp_praktik', 'alamatpraktik', 'provinsip', 'kotap', 'kecamatanp', 'kodeposp', 'jampraktik', 'haripraktik', 'tenagakesehatanlain', 'tenaganonkesehatan', 'bangunan', 'ruangtunggu', 'ruangperiksa', 'ruangbersalin', 'ruangnifas', 'wc', 'ruanglain'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
