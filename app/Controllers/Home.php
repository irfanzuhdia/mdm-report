<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
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