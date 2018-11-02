<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dave extends Controller
{
    public function index(){
		return view('index');
	}
	function create (){
		echo 'ini controller create';
	}
	function tambah (){
		echo 'Tambah';
	}
}
