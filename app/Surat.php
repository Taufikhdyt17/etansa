<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table='surat';
    protected $fillable=[
    'pengirim', 'jenis_surat', 'no_surat','perihal','tgl_surat'
    ,'jam','tgl_kirim','file_surat', 'status_surat'
    ];

    public function detailsurat()
    {
        return $this->belongsToMany(DetailSurat::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class,'detail_surat','surat_id','user_id');
    }
}
