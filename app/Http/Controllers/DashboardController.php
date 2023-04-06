<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', ["title" => "BSI Student Portal"]);
    }
    public function profil()
    {
        return view('dashboard.mahasiswa', ["title" => "Profil Mahasiswa"]);
    }
    public function nilai()
    {
        return view('dashboard.nilai', ["title" => "Nilai Mahasiswa"]);
    }
}
