<?php namespace App\Controllers;
use App\Models\HalTigaModel;
use App\Models\HalTigaModelDua;
use CodeIgniter\Controller;

class HalTiga extends BaseController
{
     public function index()
     {
        $data = array(
            "title" => "Page 3"
        );
        echo view ("template/header", $data);
        echo view ("halamantiga");
        echo view ("template/footer");
     }

     public function insert()
     {
         $data = [ 
             'nama' =>$this->request->getVar('nama'),
             'nama_tengah' =>$this->request->getVar('nama_tengah'),
             'nama_akhir' =>$this->request->getVar('nama_akhir'),
             'email' =>$this->request->getVar('email'),
             'url' =>$this->request->getVar('url'),  
             'bidang' =>$this->request->getVar('bidang'),  
             'negara' =>$this->request->getVar('negara'),
             'bio' =>$this->request->getVar('bio'),
             'judul' =>$this->request->getVar('judul'),
             'abstrak' =>$this->request->getVar('abstrak'),
             'katakunci' =>$this->request->getVar('katakunci'),
             'kontributor' =>$this->request->getVar('kontributor'),
             'referensi' =>$this->request->getVar('referensi')
            ];
            $data2 = [
                'judul' =>$this->request->getVar('judul'),
                'abstrak' =>$this->request->getVar('abstrak'),
                'katakunci' =>$this->request->getVar('katakunci'),
                'bahasa' =>$this->request->getVar('bahasa'),
                'kontributor' =>$this->request->getVar('kontributor'),  
                'referensi' =>$this->request->getVar('referensi'),  
            ];
         $model = new HalTigaModel();
         $model->insert($data);
         $model2 = new HalTigaModelDua();
         $model2->insert($data2);
     }
}
?>