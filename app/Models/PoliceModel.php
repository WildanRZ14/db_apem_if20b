<?php

namespace App\Models;

use CodeIgniter\Model;

class PoliceModel extends Model
{
    protected $table = 'police';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'nama_pelapor', 'telpon_pelapor','lokasi_kejadian','tanggal_kejadian','isi_laporan'
    ];
    protected $returnType = 'App\Entities\Police';
    protected $useTimestamps = false;
    public function findById($id)
    {
    $data = $this->find($id);
    if ($data) {
    return $data;
    }
    return false;
    }
   }