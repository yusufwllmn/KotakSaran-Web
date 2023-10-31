<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table        = "petugas";
    protected $primaryKey   = "id_petugas";
    protected $fillable     = ['nama', 'alamat', 'telephone', 'id_bagian', ' avatar', 'id_user'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function bagian()
    {
        return $this->belongsTo('App\Models\Bagian', 'id_bagian');
    }
}
