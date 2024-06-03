<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floor;

class ShowFloorController extends Controller
{
    public function show($id)
    {
        $floor = Floor::find($id);
        return view('floor', compact('floor'));
    }
}