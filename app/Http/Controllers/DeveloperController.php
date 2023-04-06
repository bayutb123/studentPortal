<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index()
    {
        $migration = DB::table('migrations')->get();

        return view('developer.index', [
            "title" => "Developer Page",
            "migration" => $migration
        ]);
    }
}
