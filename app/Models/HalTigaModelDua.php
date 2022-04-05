<?php namespace App\Models;
use CodeIgniter\Model;

class HalTigaModelDua extends Model
{
     protected $table = 'article'; //table name
     protected $allowedFields= ['judul', 'abstrak', 'katakunci', 'bahasa', 'kontributor', 'referensi']; //column name of table
}
?>