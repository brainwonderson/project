<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create(){
        return view("mahasiswa.create");
    }
}
