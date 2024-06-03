<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score; // Perhatikan huruf M dan S besar

class AdminDashboardController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        return view('dosen-dashboard', compact('scores'));
    }
}
