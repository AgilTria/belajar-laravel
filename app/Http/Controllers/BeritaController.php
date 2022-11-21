<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $x = Berita::all();


        return view('berita.index', ['berita' => $x]);
    }

    public function create()
    {
        return view('berita.create');
    }


    //
}
