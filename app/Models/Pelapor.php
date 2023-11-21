<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    use HasFactory;
    protected $table        = "pelapor";
    protected $primaryKey   = "id_pelapor";
    protected $fillable     = ['id_identitas', 'nama', 'id_kategori', 'alamat', 'telephone', 'avatar', 'id_user'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id_user');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }
}
