<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPangkat extends Model
{
    public $timestamps = false;
    protected $table = 'riwayat_pangkat';
    protected $primaryKey = 'id';
    protected $fillable =
    ['pegawai_id','mst_pangkat_id','no_sk_pangkat','gaji_pokok','status'];

    // relasi ke tabel Pegawai
    public function getPegawai()
    {
        return $this->belongsTo('\App\Models\MstPangkat', 'mst_pangkat_id');
    }

        //relasi ke MstPangkat
    public function getPangkat()
    {
        return $this->belongsTo('\App\Models\MstPangkat','mst_pangkat_id');
    }


    static function listStatus()
    {
        return array(0=> 'Tidak berlaku', 1=>'Berlaku');
    }

    // membaca pangkat terakhir yang diberi status=1
    static function pGolTerahir($id)
    {
        $pang = selft::where('status',1)
            ->where('pegawai_id', $id)
            ->orderby('created_at', 'desc')
            ->first();

            return $pang;
    }
}
