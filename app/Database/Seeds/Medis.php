<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class Medis extends Seeder
{
    public function run()
    {
    //lakukan perulangan data
    for ($i = 0; $i < 1; $i++) {
    $data = [
    [
    'nama_pelapor' => 'zidan pratama',
    'telpon_pelapor' => '192753621',
    'lokasi_kejadian' => 'semampir',
    'tanggal_kejadian' => 'juni',
    'isi_laporan' => 'sakit',
    ]
    ];
    // insert semua data ke tabel
    $this->db->table('medis')->insertBatch($data);
   
    }
    }
   }
