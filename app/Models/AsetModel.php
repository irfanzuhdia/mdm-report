<?php

namespace App\Models;

use CodeIgniter\Model;

class AsetModel extends Model
{
    protected $table = "aset";
    protected $primaryKey = "id_aset";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_aset','nama_aset', 'jumlah_tersedia', 'lokasi'];
}