<?php

namespace App\Http\Controllers\Chercheur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('chercheur.dashboard.index');
    }
}
