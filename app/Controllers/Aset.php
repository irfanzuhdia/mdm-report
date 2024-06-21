<?php

namespace App\Controllers;

use App\Models\AsetModel;
use App\Models\PeminjamanModel;

class Aset extends BaseController
{
    protected $aset;
    protected $peminjaman;

    function __construct()
    {
        $this->aset = new AsetModel();
        $this->peminjaman = new PeminjamanModel();
    }

    //=================================================
    //sisi user***************************
    //==================================================
    
    //daftar aset yang dipinjam dan bisa dipinjam
    public function index()
    {
        $data['aset'] = $this->aset->findAll();
        $data['peminjaman'] = $this->peminjaman->getAsetDiajukan();
        return view('aset', $data);

    }

        //daftar aset dan bisa pinjam
        function pinjam($id)
        {
            $dataAset = $this->aset->find($id);
            if (empty($dataAset)) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Aset Tidak ditemukan !');
            }
     // ini buat aktif
     //       $this->users->find($id);
    //        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
    //        return redirect()->to('/aktivitas');
            
            $data['aset'] = $dataAset;
            return view('pinjam_aset', $data);
        }
    
    
        public function prosespinjam()
        {
            $sedia = $this->request->getVar('jumlah_tersedia');
            if (!$this->validate([
                'jumlah_pinjam' => [
                    'rules' => 'required|min_length[1]|max_length[100]|integer',
                    'errors' => [
                        'required' => 'Jumlah Pinjam Harus diisi',
                        'min_length' => '{field} Minimal 1 Karakter',
                        'max_length' => '{field} Maksimal 100 Karakter',
                        'integer' => 'Jumlah Pinjam Harus Angka',
                    ]
                ],
                'tgl_pinjam' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Pinjam Harus diisi',
                    ]
                ],
    
                'tgl_pengembalian' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Pengembalian Harus diisi',
                    ]
                ],
    
            ])) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back();
            }
    
            $peminjaman = new PeminjamanModel();
            $peminjaman->insert([
                'id_aset' => $this->request->getVar('id_aset'),
                'username' => $this->request->getVar('username'),
                'jumlah_pinjam' => $this->request->getVar('jumlah_pinjam'),
                'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),
                'tgl_pengembalian' => $this->request->getVar('tgl_pengembalian'),
                'status_pengajuan' => $this->request->getVar('status_pengajuan'),
            ]);
            return redirect()->to('/aset');
        }
    

        //edit ajukan peminjaman
        function pinjamedit($id)
        {
            $dataAset = $this->peminjaman->find($id);
            if (empty($dataAset)) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Aset Tidak ditemukan !');
            }
     // ini buat aktif
     //       $this->users->find($id);
    //        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
    //        return redirect()->to('/aktivitas');
            
            $data['peminjaman'] = $dataAset;
            return view('edit_pinjam_aset', $data);
        }
    
        public function pinjamupdate($id)
        {
            if (!$this->validate([
                'jumlah_pinjam' => [
                    'rules' => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'Jumlah Pinjam Harus diisi',
                        'min_length' => '{field} Minimal 1 Karakter',
                        'max_length' => '{field} Maksimal 100 Karakter',
                    ]
                ],
                'tgl_pinjam' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Pinjam Harus diisi',
                    ]
                ],
    
                'tgl_pengembalian' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Pengembalian Harus diisi',
                    ]
                ],
    
            ])) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back();
            }
    
            $this->peminjaman->update($id, [
                'jumlah_pinjam' => $this->request->getVar('jumlah_pinjam'),
                'tgl_pinjam' => $this->request->getVar('tgl_pinjam'),
                'tgl_pengembalian' => $this->request->getVar('tgl_pengembalian'),
            ]);
            session()->setFlashdata('message', 'Update Data Aset Berhasil');
            return redirect()->to('/aset');
        }    
    
        //hapus ajukan pinjaman
        function pinjamdelete($id)
        {
            $dataPeminjaman = $this->peminjaman->find($id);
            if (empty($dataPeminjaman)) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Tidak ditemukan !');
            }
                    
            $this->peminjaman->delete($id);
    
            session()->setFlashdata('message', 'Delete Data Aset Berhasil');
            return redirect()->to('aset');
        }
    

//=================================================
    //sisi admin***************************
//==================================================
    public function indexadmin()
    {
        $data['aset'] = $this->aset->findAll();
        return view('admin/aset', $data);
    }

    //request aset
    public function request()
    {
        $data['aset'] = $this->aset->findAll();
        $data['peminjaman'] = $this->peminjaman->getAsetDiajukanAdmin();
        return view('admin/aset_request', $data);

    }

    //tambah aset
    public function tambah()
    {
        return view('admin/tambah_aset');
    }

    public function process()
    {
        if (!$this->validate([
            'nama_aset' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Nama Aset Harus diisi',
                    'min_length' => 'Nama Aset Minimal 4 Karakter',
                    'max_length' => 'Nama Aset Maksimal 100 Karakter',
                ]
            ],
            'jumlah_tersedia' => [
                'rules' => 'required|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'Jumlah Tersedia Harus diisi',
                    'min_length' => '{field} Minimal 1 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'lokasi' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Lokasi Harus diisi',
                    'min_length' => 'Lokasi Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $aset = new AsetModel();
        $aset->insert([
            'nama_aset' => $this->request->getVar('nama_aset'),
            'jumlah_tersedia' => $this->request->getVar('jumlah_tersedia'),
            'lokasi' => $this->request->getVar('lokasi'),
        ]);
        return redirect()->to('/admin/aset');
    }


    //edit aset
    function edit($id)
    {
        $dataAset = $this->aset->find($id);
        if (empty($dataAset)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Aset Tidak ditemukan !');
        }
 // ini buat aktif
 //       $this->users->find($id);
//        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
//        return redirect()->to('/aktivitas');
        
        $data['aset'] = $dataAset;
        return view('admin/edit_aset', $data);
    }

    //update aset
    public function update($id)
    {
        if (!$this->validate([
            'nama_aset' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Nama Aset Harus diisi',
                    'min_length' => 'Nama Aset Minimal 4 Karakter',
                    'max_length' => 'Nama Aset Maksimal 100 Karakter',
                ]
            ],
            'jumlah_tersedia' => [
                'rules' => 'required|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'Jumlah Tersedia Harus diisi',
                    'min_length' => '{field} Minimal 1 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'lokasi' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Lokasi Harus diisi',
                    'min_length' => 'Lokasi Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->aset->update($id, [
            'nama_aset' => $this->request->getVar('nama_aset'),
            'jumlah_tersedia' => $this->request->getVar('jumlah_tersedia'),
            'lokasi' => $this->request->getVar('lokasi'),
        ]);
        session()->setFlashdata('message', 'Update Data Aset Berhasil');
        return redirect()->to('/admin/aset');
    }    

    //delete aset
    function delete($id)
    {
        $dataAset = $this->aset->find($id);
        if (empty($dataAset)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Aset Tidak ditemukan !');
        }
                
        $this->aset->delete($id);

        session()->setFlashdata('message', 'Delete Data Aset Berhasil');
        return redirect()->to('/admin/aset');
    }


    //setujui/tolak permintaan 
    public function requestacc($id)
    {

        $this->peminjaman->update($id, [
            'status_pengajuan' => $this->request->getVar('status_pengajuan'),
            'status_barang' => '❌'
        ]);
        session()->setFlashdata('message', 'Update Data Aset Berhasil');
        return redirect()->to('/admin/aset/request');
    }    

    public function requestdec($id)
    {

        $this->peminjaman->update($id, [
            'status_pengajuan' => $this->request->getVar('status_pengajuan'),
            'status_barang' => ''
        ]);
        session()->setFlashdata('message', 'Update Data Aset Berhasil');
        return redirect()->to('/admin/aset/request');
    }    

    public function statusbarang($id)
    {

        $this->peminjaman->update($id, [
            'status_barang' => $this->request->getVar('status_barang'),
        ]);
        session()->setFlashdata('message', 'Update Data Aset Berhasil');
        return redirect()->to('/admin/aset/request');
    }    

    

}