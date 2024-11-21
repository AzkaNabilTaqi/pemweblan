<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public $mhsModel;

    public function __construct()
    {
        $this->mhsModel = new MahasiswaModel();
    }

    public function index(): string
    {
        $datamhs = $this->mhsModel->getAllData();
        return view('template', ['content' => 'mhs/v_mahasiswa', 'mhsData' => $datamhs]);
    }
    
    public function form($nim = null){
        if($nim){
            $data = $this->mhsModel->find($nim);
            return view('template', ['content' => 'mhs/v_mahasiswa', 'mhsData' => $data]);
        } else {
            return view('template', ['content' => 'mhs/v_mahasiswa_add']);
        }
    }

    public function getAllData()
    {
        return view('template', ['content' => 'mhs/v_mahasiswa_add']);
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nim' => 'required',
            'nama' => 'required|alpha_space',
            'jenis_kelamin' => 'required|in_list[laki-laki,perempuan]',
            'tgl_lahir' => 'required',
        ];
        if ($this->validate($rules)) {
            $post = $this->request->getPost();
            $data = array(
                'nim' => $post['nim'] ?? '',
                'nama' => $post['nama'] ?? '',
                'jenis_kelamin' => $post['jenis_kelamin'] ?? '',
                'tgl_lahir' => $post['tgl_lahir'] ?? '',
            );
            $this->mhsModel->insertData($data);
            session()->setFlashdata('success', 'Data berhasil diterima');
            return redirect()->to('/mahasiswa');
        } else {
            session()->setFlashdata('error', $validation->getErrors());
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }
    }
}
