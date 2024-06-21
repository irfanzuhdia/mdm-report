<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'email' => $dataUser->email,
                    'phone' => $dataUser->phone,
                    'address' => $dataUser->address,
                    'divisi' => $dataUser->divisi,
                    'role' => $dataUser->role,
                    'deskripsi' => $dataUser->deskripsi,
                    'logged_in' => TRUE
                ]);
                if($dataUser->role==='admin'){
                return redirect()->to(base_url('/admin/home'));
                } else {
                    return redirect()->to(base_url('/'));
                }
            
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}