<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        helper('form');
        return view('user/form');
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'username' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
            'confirmPass' => 'required|matches[password]',
            'name' => 'required',
            'displayName' => 'string',
            'nickname' => 'string',
            'web' => 'valid_url_strict',
            'bio' => 'string',
        ];
        if ($this->validate($rules)) {
            $post = $this->request->getPost();
            $data = array(
                'username' => $post['username'] ?? '',
                'email' => $post['email'] ?? '',
                'password' => $post['password'] ?? '',
                'name' => $post['name'] ?? '',
                'displayName' => $post['displayName'] ?? '',
                'nickname' => $post['nickname'] ?? '',
                'web' => $post['web'] ?? '',
                'bio' => $post['bio'] ?? '',
            );
            session()->setFlashdata('success', 'Data berhasil diterima');
            return redirect()->to('/user');
        } else {
            session()->setFlashdata('error', $validation->getErrors());
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }
    }
}
