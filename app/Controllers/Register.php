<?php namespace App\Controllers;
use App\Models\RegisterModel;
use CodeIgniter\Controller;

class Register extends BaseController
{
     public function index()
     {
         return view('register');
     }

     public function insert()
     {
         $data = [ 'username' =>$this->request->getVar('username'),
             'password' =>$this->request->getVar('password') ];

         $model = new RegisterModel();
         $model->insert($data);
         echo view ("halamanawal");
     }
}
?>