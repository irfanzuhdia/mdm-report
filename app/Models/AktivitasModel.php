<?php

namespace App\Models;

use CodeIgniter\Model;

class AktivitasModel extends Model
{
    protected $table = "aktivitas";
    protected $primaryKey = "id_aktivitas";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_aktivitas', 'username', 'proyek', 'lokasi', 'aktivitas'];
}