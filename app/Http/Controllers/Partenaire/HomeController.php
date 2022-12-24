<?php

namespace App\Http\Controllers\Partenaire;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Entreprises;
use App\Models\Responsable;
use DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index() {   
        $username = Auth::user()->username;
        $user = User::all();
        $entreprises = Entreprises::all();
        $entreprise = Entreprises::where('created_by', $username) ->first();;
        $platinum = Entreprises::where('created_by', $username)->count();
        $gold = Responsable::where('created_by', $username)->count();
         return view('partenaire.dashboard.index', compact(['platinum','entreprise','gold']));
        
        }
}

