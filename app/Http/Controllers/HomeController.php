<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprises;
use App\Models\Laboratoire;
use App\Models\Equipes;
use App\Models\PNR;
use DB;
use map;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $entreprise = Entreprises::all();
        $pnr = PNR::all();
        $counentreprise = $entreprise -> count();
        $laboratoires = Laboratoire::all();
        $countlaboratoires = $laboratoires-> count();

        $wilaya = Laboratoire::select('wilaya')->groupBy(['wilaya'])->get();
        $region = Laboratoire::select('region')->groupBy(['region'])->get();
        $domaine = Laboratoire::select('domaine')->groupBy(['domaine'])->get();

        $counlaboratoires = $laboratoires -> count();
        return view('index.index', compact('pnr','laboratoires','wilaya','domaine','region','counentreprise','countlaboratoires'));
    }

    public function advancedsearch(Request $request)
    {

        $term = $request->input('kwlabo');
        $domaine = $request->input('domaine');
        $region = $request->input('region');
        $labos = Laboratoire::when($domaine AND empty($region), function ($query) use ($domaine) {
            return $query->where( 'domaine','like','%'.$domaine.'%');
        })
        ->when($region AND empty($domaine) , function ($query)  use ($region){
            return $query->where( 'region','=',$region);
        })
        ->when($region AND $domaine , function ($query)  use ($region,$domaine){
         return $query->where([['domaine','like','%'.$domaine.'%'], ['region','=',$region]]);
        })
        -> when($term AND empty($domaine) AND empty($region), function ($query) use ($term){
            return $query->where('intitule','like','%'.$term.'%')
            ->orWhere('desclabo','like','%'.$term.'%')
            ->orWhere('keywordslabo','like','%'.$term.'%')
            ->orWhere('domaine','like','%'.$term.'%')
            ->orWhere('region','like','%'.$term.'%')
            ->orWhere('etablissement','like','%'.$term.'%')
            ->orWhere('gdomainelabo','like','%'.$term.'%')
            ->orWhere('wilaya','like','%'.$term.'%');
        })
        -> when($term AND $region AND empty($domaine) , function ($query) use ($term,$region){
            return $query->where([['intitule','like','%'.$term.'%'], ['region','=',$region]])
            ->orWhere([['desclabo','like','%'.$term.'%'], ['region','=',$region]])
            ->orWhere([['keywordslabo','like','%'.$term.'%'], ['region','=',$region]])
            ;
        })
        -> when($term AND $domaine AND empty($region) , function ($query) use ($term,$domaine){
            return $query->where([['intitule','like','%'.$term.'%'], ['domaine','like','%'.$domaine.'%']])
            ->orWhere([['desclabo','like','%'.$term.'%'], ['domaine','like','%'.$domaine.'%']])
            ->orWhere([['keywordslabo','like','%'.$term.'%'], ['domaine','like','%'.$domaine.'%']])
            ;
        })
        -> when($term AND $region AND $domaine, function ($query) use ($term,$region,$domaine)
        {
        return $query->where([['intitule','like','%'.$term.'%'], ['domaine','like','%'.$domaine.'%'], ['region','=',$region]])
        ->orWhere([['desclabo','like','%'.$term.'%'], ['domaine','like','%'.$domaine.'%'], ['region','=',$region]])
        ->orWhere([['keywordslabo','like','%'.$term.'%'], ['domaine','like','%'.$domaine.'%'], ['region','=',$region]])
                    ;
        })

        ->paginate(6)->withQueryString(); 
        $wilaya = Laboratoire::when($region, function ($query)  use ($region){
            return $query->select('wilaya')->where( 'region','=',$region)
            ->distinct()->get('wilaya');
            
        });
        
        
                    return view('index.results', compact('labos','wilaya'));


    }

    public function laboprofile(Request $request)
    {

        $id = $request-> id;
        $labo = Laboratoire::where([['id','=',$id]])->first();
        $code = $labo->code;
        $team = Equipes::where([['codelabo','=',$code]])->get();

        return view('index.labo', compact('labo','team'));
    }
 
 public function advancedsearchENTR(Request $request)
    {
        $term = $request->input('kwentre');
        $entreprises = Entreprises::when($term, function ($query) use ($term) {
            return $query->where( 'desc','like','%'.$term.'%')
            ->orWhere( 'secact','like','%'.$term.'%');
        })
   
        ->paginate(6)->withQueryString();

        

        return view('index.advancedsearch', compact('entreprises','term'));

    }
}   

    
