<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $a = Guru::all();

        return view('guru.index', ['guru' => $a]);
    }
    //
}
