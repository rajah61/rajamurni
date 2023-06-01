<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatapenyakitController extends Controller
{
    public function index()
    {
        return view('datapenyakit.index');
    }
}
