<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\data_siswa;

class data_siswa_controller extends Controller
{
    public function index()
    {
        $data = data_siswa::all();
        return view('data_siswa', ['data' => $data]);
    }
}