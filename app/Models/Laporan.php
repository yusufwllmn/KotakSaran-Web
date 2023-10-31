<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table        = "laporan";
    protected $primaryKey   = "id_laporan";
    protected $fillable     = ['subjek_laporan', 'isi_laporan', 'tanggal_lapor', 'id_status', 'dokumen', 'id_pelapor'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function bagian()
    {
        return $this->belongsTo('App\Models\Bagian', 'id_bagian');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'id_status');
    }
}
