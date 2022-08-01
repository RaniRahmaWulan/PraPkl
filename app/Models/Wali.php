<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    public $fillable = ['nama' , 'foto' , 'id_siswa'];
    public $timestamps = true;

    // membuat relasi one to one dimodel
    public function siswa()
    {
        // data dari model 'wali' bisa dimiliki
        // oleh model 'siswa' melalui 'id_siswa'
        return $this->belongsTo(Siswa::class, 'id_siswa'); 
    }

    // method menampilkan image(foto)
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/wali/ ' . $this->foto))) {
            return asset('images/wali/' . $this->foto);
        } else{
            return asset('images/no_image.jpg/'); 
        }
    }
    // menghapus image(foto) di stronge(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('image/wali/' . $this->foto))) {
            return unlink(public_path('images/wali/' . $this->foto));
    }
}
}