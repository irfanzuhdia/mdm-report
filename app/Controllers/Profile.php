<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Profile extends BaseController
{
	protected $users;

    function __construct()
    {
        $this->users = new UsersModel();
//        $this->aktivitas = new AktivitasModel();
    }

	public function index()
	{
		return view('profile');
	}

	function edit($id)
    {
        $dataPegawai = $this->users->find($id);
        if (empty($dataPegawai)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
 // ini buat aktif
 //       $this->users->find($id);
//        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
//        return redirect()->to('/aktivitas');
        
        $data['users'] = $dataPegawai;
        return view('profile_edit', $data);
    }

    public function update($id)
    {

        $this->users->update($id, [
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

		$username = session()->get('username');

		$dataUser = $this->users->where([
            'username' => $username,
        ])->first();

		session()->set([
			'deskripsi' => $dataUser->deskripsi,
		]);
		
        session()->setFlashdata('message', 'Update Data Aktivitas Berhasil');
        return redirect()->to('profile');
	}

	public function index2()
	{
		$tes = session()->get('role');
                if($tes == 'admin'){
					return view('/admin/home');

                } else {
					echo "bukan";
				}
//		return view('/admin/home');
	}	
}