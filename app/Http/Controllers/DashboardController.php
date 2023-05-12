<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Announcement;

class DashboardController extends Controller
{
    public function index()
    {
        $announcement = Announcement::all()->sortByDesc('id');
        $latest = Announcement::all()->last();
        return view('dashboard.index', ["title" => "BSI Student Portal", 'announcements' => $announcement, 'latest' => $latest]);
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
