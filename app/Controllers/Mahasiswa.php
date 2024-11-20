<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index(): string
    {
        helper('form');
        return view('mhs/v_mahasiswa_add');
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'nik' => 'required',
            'nama' => 'required|alpha_space',
            'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
            'tgl_lahir' => 'required',
            'umur' => 'required|integer',
            'jurusan' => 'required',
        ];
        if ($this->validate($rules)) {
            $post = $this->request->getPost();
            $data = array(
                'nik' => $post['nik'] ?? '',
                'nama' => $post['nama'] ?? '',
                'jenis_kelamin' => $post['jenisKelamin'] ?? '',
                'tgl_lahir' => $post['tgl_lahir'] ?? '',
                'umur' => $post['umur'] ?? '',
                'jurusan' => $post['jurusan'] ?? '',
            );
            session()->setFlashdata('success', 'Data berhasil diterima');
            return redirect()->to('/mahasiswa');
        } else {
            session()->setFlashdata('error', $validation->listErrors());
            return redirect()->to('/mahasiswa');
        }
    }
}
