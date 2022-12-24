<?php

namespace App\Http\Controllers\Partenaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entreprises;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AddenController extends Controller
{
    public function index() {
        
      
        return view('partenaire.dashboard.add');
        }


        public function create() {
            $username = Auth::user()->username;
            if (Entreprises::where('created_by', '=', $username)->count() == 0) {
            return view('partenaire.dashboard.add');
            }
            else {

            return redirect('partenaire/dashboard') -> with('txt','Vous ne pouvez ajouter qu\'une seule entreprise!');


            }
            
        }
        public function updateindex() {

            $username = Auth::user()->username;
            $entreprise = Entreprises::where('created_by', $username) ->first();;
            return view('partenaire.dashboard.update', compact(['entreprise']));;

            }

            public function update() {

                $username = Auth::user()->username;
                if (Entreprises::where('created_by', '=', $username)->count() == 0) {
                    return redirect('partenaire/dashboard/add') -> with('txt','Vous devez ajouter une entreprise!');
                }

    
                }

            function store(Request $request) {

                $username = Auth::user()->username;
                if (Entreprises::where('created_by', '=', $username)->count() == 0) {
                    $add = new Entreprises();
                    $add -> enname = $request['name'];
                    $add -> website = $request['website'];
                    $add -> address = $request['address'];
                    
                    if($request['formejur']) {
                        $add -> fjur = $request['formejur'];
                    }
                    elseif ($request['forme']) {
                        $add -> fjur = $request['forme'];

                    }
                                        
                    if($request['proprietyent']) {
                        $add -> propentre = $request['proprietyent'];
                    }
                    elseif ($request['propriety']) {
                        $add -> propentre = $request['propriety'];

                    }                                        
                    if($request['typetr']) {
                        $add -> typeentreprise = $request['typetr'];
                    }
                    elseif ($request['typeentr']) {
                        $add -> typeentreprise = $request['typeentr'];

                    }
                    $add -> typeact = $request['typeact'];
                                        
                    if($request['domaineactentr']) {
                        $add -> domact = $request['domaineactentr'];
                    }
                    elseif ($request['domaineact']) {
                        $add -> domact = $request['domaineact'];
                    }

                    if($request['secteuract']) {
                        $add -> secact = $request['secteuract'];
                    }
                    elseif ($request['secteurac']) {
                        $add -> secact = $request['secteurac'];
                    }

                    if($request['rnd']) {
                        $add -> rnd = $request['rnd'];
                    }
                    elseif ($request['rndnon']) {
                        $add -> rnd = $request['rndnon'];
                    } 
                    if($request['compsc']) {
                        $add -> compsc = $request['compsc'];
                    }
                    elseif ($request['compscnon']) {
                        $add -> compsc = $request['compscnon'];
                    } 
                    
                    $add -> problems = $request['problems'];
                    $add -> remarques = $request['naremarquesme'];
                    $add -> created_by = Auth::user()->username;
                    $add->save();
                    DB::table('users')
                    ->where('username',$username)
                    ->update(['hasentreprise' => 'Oui']);
                    return redirect('partenaire/dashboard/') -> with('txt','Entreprise ajoutée avec succès !');
                }
              
                else {

                    return redirect('partenaire/dashboard') -> with('txt','U already got one  !');

                }
            
            }
    }
