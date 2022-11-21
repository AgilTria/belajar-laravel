<?php

namespace App\Http\Controllers;

use App\Models\Dosens;
use Illuminate\Http\Request;

class DosensController extends Controller
{
    public function index(){

        $a = Dosens::all();

        return view('Dosen.index', ['dosen' => $a]);
    }

    public function create()
    {
        return view('Dosen.create');
    }

    public function login()
    {
        return view('Dosen.login');
    }
    //
}
