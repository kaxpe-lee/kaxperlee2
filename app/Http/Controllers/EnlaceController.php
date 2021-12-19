<?php

namespace App\Http\Controllers;

use App\Models\enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    public function index()
    {
        $enlaces = Enlace::all();

        return view('enlaces.enlaces', compact('enlaces'));
    }
}
