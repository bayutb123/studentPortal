<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view('dashboard.index', ["title" => "BSI Student Portal"]);
    }
    public function profil()
    {
        $user = Student::where('id', '=', 17200269)->firstOrFail();
        return view('dashboard.mahasiswa', ["title" => "Profil Mahasiswa", "user" => $user]);
    }
    public function nilai()
    {
        return view('dashboard.nilai', ["title" => "Nilai Mahasiswa"]);
    }
}
