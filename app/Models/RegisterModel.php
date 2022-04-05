<?php namespace App\Models;
use CodeIgniter\Model;

class RegisterModel extends Model
{
     protected $table = 'users'; //table name
     protected $allowedFields= ['username', 'password']; //column name of table
}
?>