<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailSurat extends Model
{
    protected $table = 'detail_surat';
    protected $fillable=[
     'surat_id', 'user_id'
     ];
 
    public function surat()
     {
         return $this->belongsTo(Surat::class);
     }
 
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
