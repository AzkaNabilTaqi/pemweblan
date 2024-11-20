<?php

namespace App\Controllers;

use DateTime;

class BelajarHelper extends BaseController
{

    public function index(): string
    {
        helper(['form', 'belajar']);
        return view('v_belajar_helper', ['data' => belajar('DATA')]);
    }

    public function helper () {
        helper(['belajar', 'number']);
        $amount = number_to_currency(005005005, 'IDR', 'id_ID', 2);
        $tgl = tanggal(date('Y.m.d'));
        echo belajar($tgl);
    }
    

    public function simpanBelajar() {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        exit;
    }
}
