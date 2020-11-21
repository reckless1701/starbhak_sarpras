<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    // public function Barang(){
    //     return $this->belongsTo('App/Barang','id_barang','id');
    // }
    // public function Ruang(){
    //     return $this->belongsTo('App/Ruang','id_ruang','id');
    // }

    protected $table = 'peminjamen';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_siswa','kelas','nama_barang'];
}
