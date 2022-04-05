<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends BaseController
{
     public function index()
     {
         return view('home');
     }

     public function insert()
     {
         $data = [ 'name' =>$this->request->getVar('name'),
             'email' =>$this->request->getVar('email'),
             'password' =>$this->request->getVar('password') ];
         $model = new UserModel();
         $model->insert($data);
     }
}
?>