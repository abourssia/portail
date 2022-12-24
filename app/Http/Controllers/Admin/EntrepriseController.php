<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entreprises;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class EntrepriseController extends Controller
{


        public function index()
        {
        $entreprise = Entreprises::where([['created_by','!=','admin']])->
        get(); 
            
            $counentreprise = $entreprise -> count();

        return view('admin.dashboard.entreprise', compact('entreprise'));
    }



            public function updateToggleSwitchStatus(Request $request) 
            { 
                DB::table('entreprises')
                ->where('id',$request->id)
                ->update(['published' => $request-> published]);
                return response()->json(['success'=>'Status change successfully.']);
        }
        
        public function profile(Request $request)
        {
                $id= $request->id; 
             $collection = Entreprises::find($id);

        return view('admin.dashboard.profileentreprise', compact('collection'));
    }
                public function updateToggleSwitchValidated(Request $request) 
                { 
                    DB::table('entreprises')
                    ->where('id',$request->id)
                    ->update(['validated' => $request-> validated]);
                    return response()->json(['success'=>'Status change successfully.']);
                }


                public function addentreprise()
                {
                return view('admin.dashboard.addentreprise');
                    }

                    public function createaddentreprise(Request $request)
                    {
           
                        $username = Auth::user()->username;
                        $add = new Entreprises();
                        $add -> enname = $request['name'];
                        $add -> website = $request['website'];
                        $add -> address = $request['address'];
                        $add -> desc = $request['desc'];
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
                        $add -> validated ='Oui';
                        $add -> created_by = Auth::user()->username;
                        $add->save();
                        return redirect('admin/dashboard/entreprise') -> with('txt','Entreprise ajoutée avec succès !');

                        }
                        public function indexbyme()
                        {
                            $entreprises = Entreprises::where([['created_by','=','admin'],['id','!=','17']])->get(); 
                
                        return view('admin.dashboard.entreprisesbyadmin', compact('entreprises'));
                    }
        }


