<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use \CodeIgniter\I18n\Time; //tambahkan ini jika menggunakan format time
class Users extends Seeder
{
 public function run()
 {
 //lakukan perulangan data
 for ($i = 0; $i < 1; $i++) {
 $data = [
 [
 'username' => 'wildan',
 'email' => 'razzaqpratama@gmail.com',
 'password' => 'rahasia',
 'mode' => 'admin',
 ],
[
'username' => 'afifr',
'email' => 'afifrohman228@gmail.com',
'password' => 'afifrohman1',
'mode' => 'sar',
],
[
'username' => 'syifana',
'email' => 'syifanamuflih@gmail.com',
'password' => 'syifana1',
'mode' => 'pemadam',
],
[
'username' => 'fitrotul',
'email' => 'fitrotulkhasanah@gmail.com',
'password' => 'fitrotul',
'mode' => 'medis',
],
[
'username' => 'kinanthi',
'email' => 'kinanthiputri@gmail.com',
'password' => 'kinanthi',
'mode' => 'polisi',
],
[
'username' => 'farah',
'email' => 'farahardelia@gmail.com',
'password' => 'farah1',
'mode' => 'user',
]
 ];
 // insert semua data ke tabel
 $this->db->table('users')->insertBatch($data);

 }
 }
}

