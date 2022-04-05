<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function halamanAwal()
    {
        $data = array(
            "title" => "Index"
        );
        echo view ("template/header", $data);
        echo view ("halamanawal");
        /*echo "Information Technology Journal";
        echo "Jurnal ini bertujuan mempublikasikan hasil penelitian di bidang Teknologi Informasi";*/
        echo view ("template/footer");
    }

    public function halamanSatu()
    {
        $data = array(
            "title" => "Page 1"
        );
        echo view ("template/header", $data);
        echo view ("halamansatu");
        echo view ("template/footer");
    }

    public function halamanDua()
    {
        $data = array(
            "title" => "Page 2"
        );
        echo view ("template/header", $data);
        echo view ("halamandua");
        echo view ("template/footer");
    }

    public function halamanTiga()
    {
        $data = array(
            "title" => "Page 3"
        );
        echo view ("template/header", $data);
        echo view ("halamantiga");
        echo view ("template/footer");
    }

    public function halamanEmpat()
    {
        $data = array(
            "title" => "Page 4"
        );
        echo view ("template/header", $data);
        echo view ("halamanempat");
        echo view ("template/footer");
    }

    public function halamanLima()
    {
        $data = array(
            "title" => "Page 5"
        );
        echo view ("template/header", $data);
        echo view ("halamanlima");
        echo view ("template/footer");
    }

    public function Register()
    {
        $data = array(
            "title" => "Register"
        );
        echo view ("template/header", $data);
        echo view ("register");
        echo view ("template/footer");
    }

    public function tryHeaderx()
    {
        echo view ("tryHeader");
    }
}

