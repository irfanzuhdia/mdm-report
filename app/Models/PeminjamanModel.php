<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id_peminjaman";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_peminjaman','id_aset', 'username','jumlah_pinjam','tgl_pinjam','tgl_pengembalian','status_pengajuan','status_barang'];

    public function getAsetDiajukan(){
        $usernow = session()->get('username');
        return $this->db->table('peminjaman')
        ->join('aset','aset.id_aset=peminjaman.id_aset')
        ->getWhere(['username' => $usernow])->getResultArray();
    }

    public function getAsetDiajukanAdmin(){
        $usernow = session()->get('username');
        return $this->db->table('peminjaman')
        ->join('aset','aset.id_aset=peminjaman.id_aset')
        ->join('users','users.username=peminjaman.username')
        ->get()->getResultArray();
    }
}