<?php namespace App\Models;
use CodeIgniter\Model;

class HalTigaModel extends Model
{
     protected $table = 'author'; //table name
     protected $allowedFields= ['nama', 'nama_tengah', 'nama_akhir', 'email', 'url', 'bidang', 'negara', 'bio']; //column name of table
}
?>