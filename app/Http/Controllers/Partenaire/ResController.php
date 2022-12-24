<?php

namespace App\Http\Controllers\Partenaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responsable;
use App\Models\Entreprises;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ResController extends Controller
{
        public function index() {
        return view('partenaire.dashboard.addresb');
        }
        
        public function validator()
        {
            $data = request()-> validate([
                'posteres' => 'required',
                'fname' => 'required',
                'lname' => 'required',
                'mail' => 'required',
                'fax' => 'required',
                'status' => 'required',
                'tel' => 'required',

            ]);

        }
        public function create() {
            $username = Auth::user()->username;
            if (Responsable::where('created_by', '=', $username)->count() ==0) {
                return view('partenaire.dashboard.addresb');
            }
            else {
            return redirect('partenaire/dashboard') -> with('txt','Vous ne pouvez ajouter qu\'une seule personne responsable!');
            }
        }    
        function store(Request $request) {

            $username = Auth::user()->username;
            if (Responsable::where('created_by', '=', $username)->count() == 0) {
                $add = new Responsable();
                if($request['posteres']) {
                            $add -> posteres = $request['posteres'];
                        } else if ($request['posteres']) {
                            $add -> posteres = $request['posteres'];
                }
                if (Entreprises::where('created_by', '=', $username)->count() == 1) {   
                            $entreprise = Entreprises::where('created_by', $username)->first();
                            $name = $entreprise -> enname;
                            $add -> entreprise = $name;
                }
                            $add -> fname = $request['fname'];
                            $add -> lname = $request['lname'];
                            $add -> email = $request['mail'];
                            $add -> fax = $request['fax'];
                            $add -> tel = $request['tel'];
                            $add -> status = $request['status'];
                            $add -> created_by = Auth::user()->username;
                            $add->save();
                return redirect('partenaire/dashboard/') -> with('txt2','Responsable ajouté avec succès !');
            }   
            else {
                return redirect('partenaire/dashboard') -> with('txt','U already got one  !');
            }
        
        }



}
