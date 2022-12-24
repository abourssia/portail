<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laboratoire;
use App\Models\Entreprises;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {       
        $user = User::all();
        $counuser = $user -> count();
        $laboratoires = Laboratoire::all();
        $counlaboratoires = $laboratoires -> count();
        $entreprise = Entreprises::all();
        $counentreprise = $entreprise -> count();
        return view('admin.dashboard.index', compact('entreprise','user','laboratoires','counuser','counlaboratoires','counentreprise'));
    }
}
