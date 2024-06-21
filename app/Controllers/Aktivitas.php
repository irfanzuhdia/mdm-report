<?php

namespace App\Controllers;

use App\Models\AktivitasModel;

class Aktivitas extends BaseController
{
    protected $aktivitas;

    function __construct()
    {
        $this->aktivitas = new AktivitasModel();
    }

    public function index()
    {
        $usernow = session()->get('username');
        $data['aktivitas'] = $this->aktivitas->where(['username' => $usernow,])->findAll();
        return view('aktivitas/index', $data);
    }

    public function tambah()
    {
        return view('aktivitas/tambah');
    }

    public function proses()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'proyek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'aktivitas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->aktivitas->insert([
            'username' => $this->request->getVar('username'),
            'proyek' => $this->request->getVar('proyek'),
            'lokasi' => $this->request->getVar('lokasi'),
            'aktivitas' => $this->request->getVar('aktivitas')
        ]);
        session()->setFlashdata('message', 'Tambah Aktivitas Berhasil');
        return redirect()->to('/aktivitas');
    }

    function edit($id)
    {
        $dataPegawai = $this->aktivitas->find($id);
        if (empty($dataPegawai)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Aktivitas Tidak ditemukan !');
        }
 // ini buat aktif       $this->aktivitas->find($id);
//        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
//        return redirect()->to('/aktivitas');
        
        $data['aktivitas'] = $dataPegawai;
        return view('aktivitas/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'proyek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'aktivitas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->aktivitas->update($id, [
            'proyek' => $this->request->getVar('proyek'),
            'lokasi' => $this->request->getVar('lokasi'),
            'aktivitas' => $this->request->getVar('aktivitas')
        ]);
        session()->setFlashdata('message', 'Update Data Aktivitas Berhasil');
        return redirect()->to('/aktivitas');
    }    

    function delete($id)
    {
        $dataPegawai = $this->aktivitas->find($id);
        if (empty($dataPegawai)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Aktivitas Tidak ditemukan !');
        }
        $this->aktivitas->delete($id);
        session()->setFlashdata('message', 'Delete Data Aktivitas Berhasil');
        return redirect()->to('/aktivitas');
    }

    public function indexadmin()
    {
        $data['aktivitas'] = $this->aktivitas->findAll();
        return view('admin/aktivitas_pegawai', $data);
    }

}