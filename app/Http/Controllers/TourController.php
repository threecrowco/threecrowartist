<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return view('tour.index');
    }

    public function show($id)
    {
        return view('tour.show');
    }
}
