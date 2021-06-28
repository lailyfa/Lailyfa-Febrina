<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table    ='mahasiswa';
    protected $fillable =['use_id', 'npm', 'tgl_lahir', 'tempat_lahir', 'alamat', 'telepon', 'gender'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'user');
    }
}
