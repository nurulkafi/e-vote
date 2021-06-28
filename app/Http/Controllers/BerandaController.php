<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class BerandaController extends Controller
{
    function index(){
        return view('beranda.index');
    }
}
