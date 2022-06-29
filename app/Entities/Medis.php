<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Medis extends Entity
{
    
    public function insert_user()
    {
            {
                global $mysqli;
                $arrcheckpost = array('nama_pelapor' => '', 'telpon_pelapor' => '','lokasi_kejadian' => '',
                'telpon_pelapor' => '', 'tanggal_kejadian' => '', 'isi_laporan' => '');
                $hitung = count(array_intersect_key($_POST, $arrcheckpost));
                if($hitung == count($arrcheckpost)){
                
                        $result = mysqli_query($mysqli, "INSERT INTO users SET
                        image = '$_POST[image]',
                        nama_pelapor = '$_POST[nama_pelapor]',
                        telpon_pelapor = '$_POST[telpon_pelapor]',
                        lokasi_kejadian = '$_POST[lokasi_kejadian]',
                        tanggal_kejadian = '$_POST[tanggal_kejadian]',
                        isi_laporan = '$_POST[isi_laporan]',");
                        
                        if($result)
                        {
                            $response=array(
                                'status' => 1,
                                'message' =>'Laporan Sukses Ditambahkan.'
                            );
                        }
                        else
                        {
                            $response=array(
                                'status' => 0,
                                'message' =>'Laporan Gagal Ditambahkan'
                            );
                        }
                }else{
                    $response=array(
                                'status' => 0,
                                'message' =>'Parameter Do Not Match'
                            );
                }
                header('Content-Type: application/json');
                echo json_encode($response);
            }
        }
}
