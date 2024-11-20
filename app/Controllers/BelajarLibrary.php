<?php

namespace App\Controllers;
use App\Libraries\CustomLib;

class BelajarLibrary extends BaseController
{

    private $session;

    public function __construct() {
        $this->session = session();
    }

    public function indWex(){
        return view('v_belajar_library');
    }
    
    public function login()
    {
        $newData = [
            'username' => 'johndoe',
            'email' => 'johndoe@some-sit.com',
            'logged_in' => true
        ];
        $this->session->set($newData);
        return view('v_belajar_library');
    }

    public function cobaLib(){
        $lib = new CustomLib();
        echo $lib->nama_saya();
        echo "<br/>";
        echo $lib->nama_kamu('Jono');
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to('/belajar-library');
    }

    // public function helper () {
    //     helper(['belajar', 'number']);
    //     $amount = number_to_currency(005005005, 'IDR', 'id_ID', 2);
    //     $tgl = tanggal(date('Y.m.d'));
    //     echo belajar($tgl);
    // }
    

    // public function simpanBelajar() {
    //     echo '<pre>';
    //     print_r($_POST);
    //     echo '</pre>';
    //     exit;
    // }
}
