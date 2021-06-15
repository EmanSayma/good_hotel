<?php

namespace App\Http\Controllers;

use App\Models\Deal;

class DealController extends Controller
{
    public function index()
    {
        return view('index')
              ->with(['deals' => Deal::latest()->get()]);
    }
}
