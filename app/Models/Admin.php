<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table        = "admin";
    protected $primaryKey   = "id_admin";
    protected $fillable     = ['nama', 'alamat', 'telephone', 'id_user'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
